@if (session('modalsuccess') || $errors->any())
<!-- Modal -->
<div class="modal fade show" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true" style="display: block;">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="messageModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          @if (session('modalsuccess'))
            {{ session('modalsuccess') }} <!-- Сообщение об успешной подписке -->
          @elseif ($errors->any())
            @foreach ($errors->all() as $error)
              <p>{{ $error }}</p> <!-- Сообщения об ошибках -->
            @endforeach
          @endif
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezárás</button>
      </div>
    </div>
  </div>
</div>
@endif

<script>
  /**
   * Hirlevel feliratkozas
   */
  document.addEventListener('DOMContentLoaded', function () {
      // Проверяем, если есть сообщения успеха или ошибки
      @if (session('modalsuccess') || $errors->any())
          var myModal = new bootstrap.Modal(document.getElementById('messageModal'), {
              keyboard: false // запрещает закрытие модального окна клавишей Escape
          });
          myModal.show(); // Показать модальное окно
      @endif
  });
</script>