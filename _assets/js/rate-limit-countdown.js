(function () {
  var params = new URLSearchParams(window.location.search);
  var wait = Number(params.get('wait') || '0');
  if (!Number.isFinite(wait) || wait <= 0) return;

  var form = document.querySelector('form');
  if (!form) return;

  var box = document.createElement('div');
  box.className = 'rate-limit-alert';
  box.setAttribute('role', 'status');
  box.setAttribute('aria-live', 'polite');

  var text = document.createElement('p');
  text.className = 'rate-limit-alert__text';
  box.appendChild(text);

  var update = function () {
    if (wait <= 0) {
      text.textContent = 'Ya puedes volver a enviar el formulario.';
      return;
    }
    text.textContent = 'Demasiados intentos. Intenta nuevamente en ' + wait + ' segundos.';
  };

  update();
  form.parentNode.insertBefore(box, form);

  var timer = setInterval(function () {
    wait -= 1;
    update();
    if (wait <= 0) {
      clearInterval(timer);
      params.delete('wait');
      params.delete('error');
      var nextUrl = window.location.pathname + (params.toString() ? '?' + params.toString() : '');
      window.history.replaceState({}, '', nextUrl);
    }
  }, 1000);
})();
