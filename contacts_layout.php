    <div class="multicolumns">
        <div class="column_I">
            <div class="column_sub_block">
                <h3>Наши координаты</h3>
                <h4>Придти в гости</h4>
                <p>123456 Москва</p>
                <p>Набережная Большой Реки</p>
                <p>дом Теремок, номер 1</p>
                <p>155-й этаж</p>
                <h4>Позвонить</h4>
                <p>тел.+1 234 567-89-90</p>
                <p>моб.+0 987 654-32-10</p>
                <h4>Написать</h4>
                <p>e-mail: allaround @ nonwinefromneaustralia.com</p>
                <h4>Мы в соц.сетях</h4>
                <div class="temp_networks">
                    <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fa fa-vk"></i> ВКонтакте</a>
                    <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                    <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
            </div>
        </div>
        <div class="column_II">
            <div class="column_sub_block">
                <h3>Наша анкета</h3>
                <form class="temp_form" action="#">
                    <fieldset>
                        <legend>О вас</legend>
                        <div>
                            <label class="temp_label_inline" for="temp_name_1">Имя</label>
                            <input id="temp_name_1" type="text" placeholder="Александр">
                        </div>
                        <div>
                            <label class="temp_label_inline" for="temp_name_2">Фамилия</label>
                            <input id="temp_name_2" type="text" placeholder="Иванов">
                        </div>
                        <div>
                            <label class="temp_label_inline" for="temp_date_1">День рождения</label>
                            <input id="temp_date_1" type="date">
                        </div>
                        <div>
                            <label class="temp_label_inline" for="temp_number_1">Сколько у вас детей?</label>
                            <input id="temp_number_1" type="number" min="0" max="12">
                        </div>
                        <div>
                            <label class="temp_label_inline" for="temp_tel">Тел.</label>
                            <input id="temp_tel" type="tel" placeholder="+7 234 567-89-90">
                        </div>
                        <div>
                            <label class="temp_label_inline" for="temp_email">E-mail</label>
                            <input id="temp_email" type="email" placeholder="Your e-mail">
                        </div>
                        <div>
                            <label class="temp_label_inline" for="temp_www">Web-page</label>
                            <input id="temp_www" type="url" placeholder="www.mysite.com">
                        </div>

                        <legend>Ваше настроение</legend>
                        <div>
                            <label class="temp_label_inline" for="temp_color">Выберите цвет</label>
                            <input id="temp_color" type="color">
                        </div>

                        <legend>О ваших животных</legend>
                        <div>
                            <label class="temp_label_checkbox" for="temp_check_1">У вас есть кошка?</label>
                            <input type="checkbox" id="temp_check_1">
                        </div>
                        <div><label class="temp_label_checkbox" for="temp_check_2">А собака?</label>
                            <input type="checkbox" id="temp_check_2">
                        </div>
                        <div><label class="temp_label_checkbox" for="temp_check_3">Может морская свинка?</label>
                            <input type="checkbox" id="temp_check_3">
                        </div>
                        <div><label class="temp_label_checkbox" for="temp_check_4">Неужели черепаха?</label>
                            <input type="checkbox" id="temp_check_4">
                        </div>


                        <legend>А мишка нравится?</legend>
                        <img src="images/koala2.jpg" alt="морда коалы" style="height: 80px;">
                        <div class="temp_radio_block">
                            <div class="temp_radio_button">
                                <label for="temp_radio_first">ДА!</label>
                                <input id="temp_radio_first" type="radio" name="temp_radio">
                            </div>
                            <div class="temp_radio_button">
                                <label for="temp_radio_second">НЕТ</label>
                                <input id="temp_radio_second" type="radio" name="temp_radio" checked>
                            </div>
                            <div class="temp_radio_button">
                                <label for="temp_radio_third">это НЕ мишка!</label>
                                <input id="temp_radio_third" type="radio" name="temp_radio">
                            </div>
                        </div>

                        <legend>О работе!</legend>
                        <div>
                            <label class="temp_label_inline" for="temp_text_advised">Ваша профессия</label>
                            <input id="temp_text_advised" type="text" list="temp_advices">
                            <datalist id="temp_advices">
                                <option>Литейщик</option>
                                <option>Кузнец</option>
                                <option>Молотобоец</option>
                                <option>Землепашец</option>
                                <option>Менеджер</option>
                            </datalist>
                        </div>
                        <legend></legend>
                        <div>
                            <input type="submit" value="Отправить">
                            <input type="reset" value="Очистить">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="column_III">
            <h3>Обратная связь</h3>
            <form class="temp_form" action="#">
                <fieldset>
                    <legend>Ваше сообщение</legend>
                    <div>
                        <label for="temp_message"></label>
                        <textarea name="temp_text_area" id="temp_message" cols="30" rows="10"
                            placeholder="Дорогие друзья, ..."></textarea>
                    </div>
                </fieldset>
                <fieldset>
                    <legend></legend>
                    <div>
                        <input type="submit" value="Отправить">
                        <input type="reset" value="Очистить">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>