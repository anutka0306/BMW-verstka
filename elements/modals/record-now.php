<div class="modal fade" id="recordNowModal" tabindex="-1" aria-labelledby="recordNowModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recordNowModal">Заявка на обратный звонок</h5>
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form method="post" action="#">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Введите телефон</label>
                            <input required type="tel" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Выберите адрес</label>
                            <select required class="form-select" name="address" aria-label="Выберите адрес">
                                <option selected>Выберите адрес</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="agree">
                            <label class="form-check-label" for="agree">Я даю согласие на обработку персональных данных</label>
                        </div>
                        <div class="button__wrapper">
                            <button type="submit" class="btn btn-primary">отправить заявку</button>
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