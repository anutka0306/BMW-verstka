<div class="modal fade" id="recordNowModal" tabindex="-1" aria-labelledby="recordNowModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recordNowModal">Заявка на обратный звонок</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form id="popup_form">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Введите телефон</label>
                            <input required type="tel" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Выберите адрес</label>
                            <select required class="form-select" name="address" aria-label="Выберите адрес">
                                <option selected>Выберите адрес</option>
                                <option value="b116">ул. Боровая 116</option>
                                <option value="k20">Кушелевская дорога 20</option>
                                <option value="to12">Дор. на Турухтанные Острова 12</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="agree" checked>
                            <label class="form-check-label" for="agree">Я даю согласие на обработку персональных данных</label>
                        </div>
                        <div class="button__wrapper">
                            <button type="button" class="btn btn-primary">отправить заявку</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>
<script>
    $("#popup_form button").on("click", function(){
        $.ajax({
            url: '/popup_form.php',
            method: 'post',
            dataType: 'html',
            data: $("#popup_form").serialize(),
            success: function(data){
                console.log(data);
                alert(data);
            }
        });
    });
</script>