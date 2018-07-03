<!-- Модальне вікно відгуку -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-rounds">
                <div class="container-fluid px-0">
                    <div class="row justify-content-center my-4 px-4">
                        <div class="col text-center">
                            <h5 class="section-header-huge pt-0 mb-0">залиште свій відгук про відпочинок!</h5>
                        </div>
                    </div>
                    <div class="row text-center py-4 px-4 no-gutters back-f4f4f4">
                        <div class="col-md-6 my-1">
                            <div class="input-pattern">
                                <input type="text" placeholder="Прізвище"/>
                            </div>
                        </div>
                        <div class="col-md-6 my-1">
                            <div class="input-pattern">
                                <input type="text" placeholder="Ім'я"/>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col px-5">
                            <div class="d-flex justify-content-between mb-2">
                                <p class="section-text-small m-0 pt-2">чистота</p>
                                <div class="raty pt-2 color-ff8c00"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="section-text-small m-0 pt-2">затишок</p>
                                <div class="raty pt-2 color-ff8c00"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="section-text-small m-0 pt-2">розташування</p>
                                <div class="raty pt-2 color-ff8c00"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="section-text-small m-0 pt-2">смачна кухня</p>
                                <div class="raty pt-2 color-ff8c00"></div>
                            </div>
                        </div>
                        <input class="display-none" type="number" name="cleanliness" min="0" max="5" value="0">
                        <input class="display-none" type="number" name="cosiness" min="0" max="5" value="0">
                        <input class="display-none" type="number" name="location" min="0" max="5" value="0">
                        <input class="display-none" type="number" name="deliciously" min="0" max="5" value="0">
                    </div>                    <div class="row text-center py-4 px-4 no-gutters back-f4f4f4">
                        <div class="col my-1">
                            <textarea rows="3" placeholder="Опишіть ваші враження" class="impression-input" wrap="soft"></textarea>
                        </div>
                    </div>
                    <div class="row  justify-content-center my-3">
                        <div class="col-md-6 col-10">
                            <button type="button" class="btn btn-yellow" data-dismiss="modal">Відправити відгук</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>