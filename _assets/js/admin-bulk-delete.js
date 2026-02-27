(function () {
  function createHiddenInput(name, value) {
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = name;
    input.value = value;
    return input;
  }

  function initBulkForm(form) {
    var scopeName = form.getAttribute('data-checkbox-scope') || '';
    var scopeRoot = document.querySelector('[data-bulk-scope="' + scopeName + '"]') || form.closest('[data-bulk-scope]') || document;
    var selectAll = scopeRoot.querySelector('[data-select-all]');
    var countEl = scopeRoot.querySelector('[data-selected-count]');
    var bulkButton = form.querySelector('[data-bulk-delete-button]');
    var selectedIdsHost = form.querySelector('[data-selected-ids]');
    var rowCheckboxes = Array.prototype.slice.call(scopeRoot.querySelectorAll('[data-row-checkbox]'));

    if (!selectAll || !countEl || !bulkButton || !selectedIdsHost || rowCheckboxes.length === 0) {
      return;
    }

    function selectedRows() {
      return rowCheckboxes.filter(function (checkbox) {
        return checkbox.checked;
      });
    }

    function updateState() {
      var total = rowCheckboxes.length;
      var selected = selectedRows().length;
      countEl.textContent = String(selected);
      bulkButton.disabled = selected === 0;
      selectAll.checked = selected > 0 && selected === total;
      selectAll.indeterminate = selected > 0 && selected < total;
    }

    selectAll.addEventListener('change', function () {
      var checked = selectAll.checked;
      rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = checked;
      });
      updateState();
    });

    rowCheckboxes.forEach(function (checkbox) {
      checkbox.addEventListener('change', updateState);
    });

    form.addEventListener('submit', function (event) {
      var rows = selectedRows();
      var selected = rows.length;
      if (selected === 0) {
        event.preventDefault();
        return;
      }

      var message = selected === 1
        ? '¿Eliminar 1 registro seleccionado?'
        : '¿Eliminar ' + selected + ' registros seleccionados?';
      if (!window.confirm(message)) {
        event.preventDefault();
        return;
      }

      selectedIdsHost.innerHTML = '';
      rows.forEach(function (checkbox) {
        selectedIdsHost.appendChild(createHiddenInput('ids[]', checkbox.value));
      });
    });

    updateState();
  }

  document.addEventListener('DOMContentLoaded', function () {
    var forms = document.querySelectorAll('[data-bulk-delete-form]');
    forms.forEach(initBulkForm);
  });
})();
