// Componente Toast simples
// Uso: toast('success', 'Produto inserido com sucesso!');
// Types suportados: success | error | warning
// Options (3º argumento opcional): { duration: number(ms), closeable: boolean }
(function(){
  const ICONS = {
    success: '✔️',
    error: '✖️',
    warning: '⚠️',
    default: 'ℹ️'
  };
  const VALID = ['success','error','warning'];
  let root;

  function ensureRoot(){
    if(!root){
      root = document.getElementById('toast-root');
      if(!root){
        root = document.createElement('section');
        root.id = 'toast-root';
        root.setAttribute('aria-live','polite');
        document.body.appendChild(root);
      }
    }
    return root;
  }

  function createToast(type, message, opts){
    const t = (VALID.includes(type)? type : 'default');
    const duration = Math.max(1000, (opts && opts.duration) || 4000);
    const closeable = opts && opts.closeable !== undefined ? opts.closeable : true;

    const el = document.createElement('output');
    el.className = 'toast' + (t !== 'default' ? ` toast--${t}` : '');
    el.setAttribute('role', t === 'error' ? 'alert' : 'status');
    el.setAttribute('aria-atomic','true');

    // Ícone
    const icon = document.createElement('span');
    icon.className = 'toast__icon';
    icon.textContent = ICONS[t] || ICONS.default;
    el.appendChild(icon);

    // Mensagem
    const msg = document.createElement('span');
    msg.className = 'toast__msg';
    msg.textContent = String(message || '');
    el.appendChild(msg);

    // Botão fechar
    if(closeable){
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'toast__close';
      btn.setAttribute('aria-label','Fechar');
      btn.textContent = '×';
      btn.addEventListener('click', () => dismiss(el));
      el.appendChild(btn);
    } else {
      // Placeholder para manter grid (ou poderia ajustar grid-template)
      const spacer = document.createElement('span');
      spacer.style.width = '.25rem';
      el.appendChild(spacer);
    }

    // Barra de vida
    const life = document.createElement('span');
    life.className = 'toast__life';
    life.style.animationDuration = duration + 'ms';
    el.appendChild(life);

    // Auto dismiss
    const autoTimer = setTimeout(() => dismiss(el), duration);

    // Guardar ref para cancelamento
    el._toastData = { autoTimer };

    // Pause ao focar ou hover
    function pause(){
      life.style.animationPlayState = 'paused';
      clearTimeout(el._toastData.autoTimer);
    }
    function resume(){
      // Recalcula tempo restante com base em width (não perfeito, simplificado)
      if(el.dataset.leaving === 'true') return;
      const remainingRatio = parseFloat(getComputedStyle(life).transform.split(',')[0]?.replace('matrix(','') || '1');
      const remaining = duration * remainingRatio || 1500;
      el._toastData.autoTimer = setTimeout(() => dismiss(el), remaining);
      life.style.animationPlayState = 'running';
    }
    el.addEventListener('mouseenter', pause);
    el.addEventListener('mouseleave', resume);
    el.addEventListener('focusin', pause);
    el.addEventListener('focusout', resume);

    return el;
  }

  function dismiss(el){
    if(!el || el.dataset.leaving === 'true') return;
    el.dataset.leaving = 'true';
    clearTimeout(el._toastData?.autoTimer);
    el.addEventListener('animationend', () => {
      el.remove();
      if(root && !root.children.length){
        // opcional remover root
        // root.remove(); root = null;
      }
    }, { once:true });
  }

  // API pública
  window.toast = function(type, message, options){
    ensureRoot();
    const el = createToast(type, message, options || {});
    root.appendChild(el);
    return {
      element: el,
      dismiss: () => dismiss(el)
    };
  };
})();

// Exemplo opcional (comentar se não quiser demonstrar)
document.addEventListener('DOMContentLoaded', () => {
    toast('success', 'Sistema carregado com sucesso!');
    toast("error", "Erro ao carregar dados!");
});

