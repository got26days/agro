<template>

    <section class="calc-sec" id="js-form" :class="{'isOverlay': back}">
        <div v-show="result == ''">
            <div class="container" v-show="currentPage === 1">
                <h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span>
                </h2>
                <div class="calc-sec__wrap">
                    <div class="calc-sec__step">
                        <div class="calc-sec__step-baloon step-1">Шаг 1 из 3</div>
                    </div>
                    <div class="calc-form">

                        <label class="calc-form__label js-label" v-if="manager">
                            <span class="calc-form__label-title">Источник заявки</span>
                            <cool-select v-model="mainform.sourcetwo" :items="['', 'Звонок', 'Агент', 'Отдел продаж', 'Другое']"
                                v-validate="'required'" name="mainform.sourcetwo" />
                            <p v-show="errors.first('mainform.sourcetwo')">Поле обязательно для заполнения</p>
                        </label>


                        <label class="calc-form__label js-label">
                            <span class="calc-form__label-title">Организационная форма</span>
                            <cool-select v-model="mainform.orgform"
                                :items="['', 'ИП КФХ (существует менее 2 лет)', 'ИП КФХ (существует более 2 лет)', 'Холдинг', 'Глава кооператива', 'Физлицо', 'ИП', 'ООО', 'ОАО', 'ЗАО', 'Другое']"
                                v-validate="'required'" name="mainform.orgform" />
                            <p v-show="errors.first('mainform.orgform')">Поле обязательно для заполнения</p>
                        </label>


                        <label class="calc-form__label js-label">
                            <span class="calc-form__label-title">Вид финансирования</span>

                            <cool-select v-model="mainform.type"
                                :items="['', 'Кредит', 'Проектное финансирование']"
                                v-validate="'required'" 
                                name="mainform.type"
                                 />

                            <p v-show="errors.first('mainform.type')">Поле обязательно для заполнения</p>

                            <p v-show="((mainform.orgform == 'ИП') && (mainform.type == 'Грант'))">Безвозмездное
                                финансирование от государства доступно только для ИП КФХ и глав кооперативов.</p>
                            <p v-show="((mainform.orgform == 'ООО') && (mainform.type == 'Грант'))">Безвозмездное
                                финансирование от государства доступно только для ИП КФХ и глав кооперативов.</p>
                            <p v-show="((mainform.orgform == 'ОАО') && (mainform.type == 'Грант'))">Безвозмездное
                                финансирование от государства доступно только для ИП КФХ и глав кооперативов.</p>
                            <p v-show="((mainform.orgform == 'ЗАО') && (mainform.type == 'Грант'))">Безвозмездное
                                финансирование от государства доступно только для ИП КФХ и глав кооперативов.</p>
                            <p v-show="((mainform.orgform == 'Другое') && (mainform.type == 'Грант'))">Безвозмездное
                                финансирование от государства доступно только для ИП КФХ и глав кооперативов.</p>


                            <p
                                v-show="((mainform.orgform == 'ИП КФХ (существует менее 2 лет)') && (mainform.type == 'Проектное финансирование'))">
                                Кредиты под целевые проекты от 100 миллионов рублей доступны только для глав
                                кооперативов, ООО, ОАО и ЗАО.</p>
                            <p
                                v-show="((mainform.orgform == 'ИП КФХ (существует более 2 лет)') && (mainform.type == 'Проектное финансирование'))">
                                Кредиты под целевые проекты от 100 миллионов рублей доступны только для глав
                                кооперативов, ООО, ОАО и ЗАО.</p>
                            <p
                                v-show="((mainform.orgform == 'Физлицо') && (mainform.type == 'Проектное финансирование'))">
                                Кредиты под целевые проекты от 100 миллионов рублей доступны только для глав
                                кооперативов, ООО, ОАО и ЗАО.</p>
                            <p v-show="((mainform.orgform == 'ИП') && (mainform.type == 'Проектное финансирование'))">
                                Кредиты под целевые проекты от 100 миллионов рублей доступны только для глав
                                кооперативов, ООО, ОАО и ЗАО.</p>

                        </label>




                        <div v-show="((mainform.type === null) || ( checkError ))">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Регион</span>
                                <!-- <select class="form-select" name="add-employer-positions" data-placeholder=" " disabled="disabled">
										<option></option>
									</select> -->
                                <cool-select :items="['']" disabled="disabled" disable-search/>
                            </label>

                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Организационная форма</span>
                                <cool-select :items="['']" disabled="disabled" disable-search/>
                            </label>

                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Дата создания юридического лица</span>
                                <input type="text" class="input calc-form__input js-input" disabled="disabled"
                                    style="background-color: #e9ecef;">
                            </label>

                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Годовой баланс</span>
                                <cool-select :items="['']" disabled="disabled" disable-search />
                            </label>
                        </div>

                        <div v-show="((mainform.type === 'Кредит') && (!checkError))">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Регион</span>
                                <cool-select v-model="mainform.form1.region" :items="cityes" v-validate="'required'" disable-search
                                    name="mainform.form1.region" no-data />

                                </cool-select>
                                <p v-show="errors.first('mainform.form1.region')">Поле обязательно для заполнения</p>
                            </label>
                            <div class="calc-form__slider">
                                <div class="calc-form__slider-txt">Сумма кредита</div>
                                <label class="calc-form__slider-val">
                                    <div class="new-selector">
                                        <input 
                                        type="number" 
                                        class="out-input"  
                                        v-model="mainform.form1.summ"
                                        @focus="focused = true" 
                                        @blur="onBlur" 
                                        v-show="focused" 
                                        ref="summ1" 
                                        @change="maxNum"/>
                                        
                                        <span 
                                        v-show="(!focused && !mainform.form1.needprice)" 
                                        @click="openInput('summ1')">
                                        {{ mainform.form1.summ }}
                                        <span class="newrubi">i</span>
                                        </span>
                                        <span 
                                        v-show="(!focused && mainform.form1.needprice)" 
                                        class="dis-num"
                                        >
                                        {{ mainform.form1.summ }}
                                        <span class="newrubi">i</span>
                                        </span>
                                    </div>
                                    <vue-slider v-model="mainform.form1.summ" v-bind="options" :disabled="watchCheck"
                                        :max="overOp" />
                                </label>
                                <div class="calc-form__slider-blc" id="slider-range-credit"></div>
                                <div class="calc-form__slider-row">
                                    <div><span class="js-min">{{ options.min }}</span> <span class="newrubi">i</span>
                                    </div>
                                    <div><span class="js-max">{{ overOp }}</span> <span class="newrubi">i</span>
                                    </div>
                                </div>
                            </div>
                            <label class="calc-form__checkbox">
                                <input type="checkbox" v-model="mainform.form1.needprice">
                                <span class="calc-form__checkbox-dop"></span>
                                <span class="calc-form__checkbox-txt">Нужен расчет от АгроДохода</span>
                            </label>

                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Дата создания юридического лица</span>
                                <input type="date" class="input calc-form__input js-input"
                                    v-model="mainform.form1.dateur" :disabled="mainform.orgform == 'Физлицо'"
                                    v-bind:class="{ isdissabled: mainform.orgform == 'Физлицо' }">
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Годовой баланс</span>
                                <cool-select v-model="mainform.form1.yearbalance" disable-search
                                    :items="['', 'Положительный баланс', 'Отрицательный баланс', 'Нулевой баланс']"
                                    v-validate="'required'" name="mainform.form1.yearbalance" />
                                <p v-show="errors.first('mainform.form1.yearbalance')">Поле обязательно для заполнения
                                </p>
                            </label>
                        </div>

                        <div v-show="((mainform.type === 'Грант') && (!checkError))">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Регион</span>
                                <cool-select v-model="mainform.form2.region" :items="cityes" v-validate="'required'" disable-search
                                    name="mainform.form2.region" />
                                <p v-show="errors.first('mainform.form2.region')">Поле обязательно для заполнения</p>
                            </label>


                            <div class="calc-form__slider">
                                <div class="calc-form__slider-txt">
                                    <span v-show="((mainform.orgform == 'ИП КФХ (существует менее 2 лет)') || (mainform.orgform == 'Физлицо'))">Доступен грант «Начинающий фермер». </span>
                                    <span v-show="(mainform.orgform == 'ИП КФХ (существует более 2 лет)')" >Доступен грант «Семейная ферма». </span>
                                    
                                    <span v-show="(mainform.orgform == 'Глава кооператива')" >Доступен грант для СПоК. </span>
                                    
                                     Какая сумма необходима?</div>

                                <label class="calc-form__slider-val">
                                    <div class="new-selector">
                                        <input type="number" id="amount-4" class="out-input"
                                            v-model="mainform.form2.summ" @focus="focused = true" @blur="onBlur"
                                            v-show="focused" ref="summ2" @change="maxNum2">
                                        <span v-show="!focused" @click="openInput('summ2')">{{ mainform.form2.summ }}
                                            <span class="newrubi">i</span></span>
                                    </div>
                                    <vue-slider v-model="mainform.form2.summ" v-bind="options" :max="overOp" :disabled="watchCheck"/>
                                </label>

                                <div class="calc-form__slider-blc" id="slider-range-grant"></div>
                                <div class="calc-form__slider-row">
                                    <div><span class="js-min">{{ options.min }}</span> <span class="newrubi">i</span>
                                    </div>
                                    <div><span class="js-max">{{ overOp }}</span> <span class="newrubi">i</span>
                                    </div>
                                </div>
                            </div>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Наличие 10% от запрашиваемой суммы <span>на
                                        счету</span><sup>*</sup></span>
                                <cool-select v-model="mainform.form2.have" :items="['', 'Да', 'Нет']" disable-search
                                    v-validate="'required'" name="mainform.form2.have" />
                                <span class="calc-form__label-sub">*Требование комиссии при подаче заявки на
                                    грант</span>
                                <p v-show="errors.first('mainform.form2.have')">Поле обязательно для заполнения</p>
                            </label>
                        </div>

                        <div v-show="((mainform.type === 'Проектное финансирование') && (!checkError))">


                            <div class="calc-form__slider">
                                <div class="calc-form__slider-txt">Сумма проекта</div>
                                <label class="calc-form__slider-val">
                                    <div class="new-selector">
                                        <input type="number" id="amount-4" class="out-input"
                                            v-model="mainform.form3.summ" @focus="focused = true" @blur="onBlur"
                                            v-show="focused" ref="summ3" @change="maxNum3">
                                        <span v-show="!focused" @click="openInput('summ3')">{{ mainform.form3.summ }}
                                            <span class="newrubi">i</span></span>
                                    </div>
                                    <vue-slider v-model="mainform.form3.summ" v-bind="options" :max="overOp" />
                                </label>

                                <div class="calc-form__slider-blc" id="slider-range-project"></div>
                                <div class="calc-form__slider-row">
                                    <div><span class="js-min">{{ options.min }}</span> <span class="newrubi">i</span>
                                    </div>
                                    <div><span class="js-max">{{ overOp }}</span> <span class="newrubi">i</span>
                                    </div>
                                </div>
                            </div>

                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Стадия проекта</span>
                                <cool-select v-model="mainform.form3.studia" disable-search
                                    :items="['', 'Идея', 'Есть бизнес план', 'Составьте мне бизнес-план', 'В процессе реализации']"
                                    v-validate="'required'" name="mainform.form3.studia" />
                                <p v-show="errors.first('mainform.form3.studia')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Бухгалтерский баланс</span>
                                <cool-select v-model="mainform.form3.balance" disable-search
                                    :items="['', 'Положительный баланс', 'Отрицательный баланс', 'Нулевой баланс', 'Необходим аудит']"
                                    v-validate="'required'" name="mainform.form3.balance" />
                                <p v-show="errors.first('mainform.form3.balance')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Кредитная история</span>
                                <cool-select v-model="mainform.form3.history" disable-search
                                    :items="['', 'Чистая кредитная история', 'Хорошая кредитная история', 'Плохая кредитная история']"
                                    v-validate="'required'" name="mainform.form3.history" />
                                <p v-show="errors.first('mainform.form3.history')">Поле обязательно для заполнения</p>
                            </label>
                        </div>

                        <div v-show="((mainform.type === 'Субсидия') && (!checkError))">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Регион</span>
                                <cool-select v-model="mainform.form4.region" :items="cityes" v-validate="'required'" disable-search
                                    name="mainform.form4.region" />
                                <p v-show="errors.first('mainform.form4.region')">Поле обязательно для заполнения</p>
                            </label>

                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Тип хозяйства</span>
                                <cool-select v-model="mainform.form4.type" disable-search
                                    :items="['', 'Животноводство', 'Растениеводство', 'Овощеводство', 'Производство']"
                                    v-validate="'required'" name="mainform.form4.type" />
                                <p v-show="errors.first('mainform.form4.type')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Сейчас бухгалтерию ведет</span>
                                <cool-select v-model="mainform.form4.buhgalrer" disable-search
                                    :items="['', 'Штатный сотрудник', 'Профильное в СХ агентство', 'Непрофильное в с СХ агентство', 'Своими силами']"
                                    v-validate="'required'" name="mainform.form4.buhgalrer" />
                                <p v-show="errors.first('mainform.form4.buhgalrer')">Поле обязательно для заполнения</p>
                            </label>
                        </div>


                        <div class="calc-form__bar" v-show="mainform.type != ''">
                            <button class="btn btn--green" @click="nextPage" :disabled="checkBtn1">Далее</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" v-show="currentPage === 2">
                <h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span>
                </h2>
                <div class="calc-sec__wrap">
                    <div class="calc-sec__step">
                        <div class="calc-sec__step-baloon step-2">Шаг 2 из 3</div>
                    </div>
                    <div class="calc-form">

                        <div v-show="mainform.type === 'Кредит'">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Кредитная история</span>
                                <cool-select v-model="mainform.form1.history" disable-search
                                    :items="['', 'Чистая кредитная история', 'Хорошая кредитная история', 'Плохая кредитная история']"
                                    v-validate="'required'" name="mainform.form1.history" />
                                <p v-show="errors.first('mainform.form1.history')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Залоги под кредит </span>
                                <cool-select v-model="mainform.form1.credit" disable-search
                                    :items="['', 'Недвижимость', 'Техника', 'Поголовье', 'Оборудование', 'Ничего из перечисленного']"
                                    v-validate="'required'" name="mainform.form1.credit" />
                                <p v-show="errors.first('mainform.form1.credit')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Желаемые сроки для погашения кредита</span>
                                <cool-select v-model="mainform.form1.term" disable-search
                                    :items="['', '12 месяцев', '24 месяца', '48 месяцев', '60 месяцев', 'более 60 месяцев']"
                                    v-validate="'required'" name="mainform.form1.term" />
                                <p v-show="errors.first('mainform.form1.term')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Цель привлечения средств</span>
                                <cool-select v-model="mainform.form1.target" disable-search
                                    :items="['', 'Пополнение оборотных средств', 'Развитие', 'Модернизация', 'Стартап', 'Другое']"
                                    v-validate="'required'" name="mainform.form1.target" />
                                <p v-show="errors.first('mainform.form1.target')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Расчет доходности на текущий момент</span>
                                <cool-select v-model="mainform.form1.moment" disable-search
                                    :items="['', 'Есть  расчёт', 'Нет расчёта', 'Хочу получить расчёт']"
                                    v-validate="'required'" name="mainform.form1.moment" />
                                <p v-show="errors.first('mainform.form1.moment')">Поле обязательно для заполнения</p>
                            </label>
                        </div>

                        <div v-show="mainform.type === 'Грант'">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Цель получения гранта</span>
                                <cool-select v-model="mainform.form2.target" disable-search
                                    :items="['', 'Расширения', 'Модернизации', 'Стартап', 'Другое']"
                                    v-validate="'required'" name="mainform.form2.target" />
                                <p v-show="errors.first('mainform.form2.target')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Тип хозяйства</span>
                                <cool-select v-model="mainform.form2.type" disable-search
                                    :items="['', 'Животноводство', 'Растениеводство', 'Овощеводство', 'Производство']"
                                    v-validate="'required'" name="mainform.form2.type" />
                                <p v-show="errors.first('mainform.form2.type')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Членство в кооперативе</span>
                                <cool-select v-model="mainform.form2.chlen" disable-search
                                    :items="['', 'Да', 'Нет', 'Являюсь председателем']" v-validate="'required'"
                                    name="mainform.form2.chlen" />
                                <p v-show="errors.first('mainform.form2.chlen')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Расчет доходности хозяйства на текущий
                                    момент</span>
                                <cool-select v-model="mainform.form2.term" disable-search
                                    :items="['', 'Есть', 'Отсутствует', 'Хочу получить']" v-validate="'required'"
                                    name="mainform.form2.term" />
                                <p v-show="errors.first('mainform.form2.term')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Расчет доходности после получения гранта</span>
                                <cool-select v-model="mainform.form2.raschet" disable-search
                                    :items="['', 'Есть', 'Отсутствует', 'Хочу получить']" v-validate="'required'"
                                    name="mainform.form2.raschet" />
                                <p v-show="errors.first('mainform.form2.raschet')">Поле обязательно для заполнения</p>
                            </label>
                        </div>

                        <div v-show="mainform.type === 'Проектное финансирование'">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Регион ведения деятельности</span>
                                <cool-select v-model="mainform.form3.region" :items="cityes" v-validate="'required'" disable-search
                                    name="mainform.form3.region" />
                                <p v-show="errors.first('mainform.form3.region')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Срок выплаты кредита</span>
                                <cool-select v-model="mainform.form3.srok" :items="['', 'от 1 года', 'до 15 лет']" disable-search
                                    v-validate="'required'" name="mainform.form3.srok" />
                                <p v-show="errors.first('mainform.form3.region')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Финансовая модель</span>
                                <cool-select v-model="mainform.form3.finance" disable-search
                                    :items="['', 'Есть', 'Нет', 'Составьте мне']" v-validate="'required'"
                                    name="mainform.form3.finance" />
                                <p v-show="errors.first('mainform.form3.finance')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Залоги под финансирование</span>
                                <cool-select v-model="mainform.form3.zalog" disable-search
                                    :items="['', 'Недвижимость', 'Техника', 'Оборудование', 'Ничего из перечисленного']"
                                    v-validate="'required'" name="mainform.form3.zalog" />
                                <p v-show="errors.first('mainform.form3.zalog')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Срок окупаемости проекта</span>
                                <cool-select v-model="mainform.form3.secondsrok" :items="['1 год', '5 лет', '10 лет', 'более 10 лет']" disable-search
                                    v-validate="'required'" name="mainform.form3.secondsrok" />
                                <p v-show="errors.first('mainform.form3.secondsrok')">Поле обязательно для заполнения
                                </p>
                            </label>
                        </div>

                        <div v-show="mainform.type === 'Субсидия'">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Получение субсидий ранее </span>
                                <cool-select v-model="mainform.form4.geter" :items="['', 'Получал', 'Не получал']" disable-search
                                    v-validate="'required'" name="mainform.form4.geter" />
                                <p v-show="errors.first('mainform.form4.geter')">Поле обязательно для заполнения</p>
                            </label>

                            <div class="calc-form__slider">
                                <div class="calc-form__slider-txt">Размер понесенных затрат к возмещению</div>
                                <label class="calc-form__slider-val">
                                    <div class="new-selector">
                                        <input type="number" id="amount-4" class="out-input"
                                            v-model="mainform.form4.summ" @focus="focused = true" @blur="onBlur"
                                            v-show="focused" ref="summ4" @change="maxNum4">
                               

                                        <span 
                                        v-show="(!focused && !mainform.form4.need)" 
                                        @click="openInput('summ4')">
                                        {{ mainform.form4.summ }}
                                        <span class="newrubi">i</span>
                                        </span>
                                        <span 
                                        v-show="(!focused && mainform.form4.need)" 
                                        class="dis-num"
                                        >
                                        {{ mainform.form1.summ }}
                                        <span class="newrubi">i</span>
                                        </span>
                                    </div>
                                    <vue-slider v-model="mainform.form4.summ" v-bind="options" :max="overOp" :disabled="mainform.form4.need"/>
                                </label>

                                <div class="calc-form__slider-blc" id="slider-range-subs"></div>
                                <div class="calc-form__slider-row">
                                    <div><span class="js-min">{{ options.min }}</span> <span class="newrubi">i</span>
                                    </div>
                                    <div><span class="js-max">{{ overOp }}</span> <span class="newrubi">i</span>
                                    </div>
                                </div>
                            </div>

                            <label class="calc-form__checkbox">
                                <input type="checkbox" id="js-check-toggler" v-model="mainform.form4.need">
                                <span class="calc-form__checkbox-dop"></span>
                                <span class="calc-form__checkbox-txt">Нужен расчет от АгроДохода</span>
                            </label>

                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Обоснование затрат к возмещению</span>
                                <cool-select v-model="mainform.form4.answer" disable-search
                                    :items="['', 'Есть', 'Нет', 'Нужна консультация']" v-validate="'required'"
                                    name="mainform.form4.answer" />
                                <p v-show="errors.first('mainform.form4.answer')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Задолженность по налогам</span>
                                <cool-select v-model="mainform.form4.dolg" :items="['', 'Есть', 'Нет']" disable-search
                                    v-validate="'required'" name="mainform.form4.dolg" />
                                <p v-show="errors.first('mainform.form4.dolg')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Процедура банкротства</span>
                                <cool-select v-model="mainform.form4.proc" :items="['', 'Есть', 'Нет']" disable-search
                                    v-validate="'required'" name="mainform.form4.proc" />
                                <p v-show="errors.first('mainform.form4.proc')">Поле обязательно для заполнения</p>
                            </label>
                        </div>


                        <div class="calc-form__bar">
                            <div class="calc-form__bar-btns">
                                <button class="btn calc-form__back" @click="backPage">Назад</button>
                                <button class="btn btn--green" @click="nextPage" :disabled="checkBtn2">Далее</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" v-show="currentPage === 3">
                <h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span>
                </h2>
                <div class="calc-sec__wrap">
                    <div class="calc-sec__step">
                        <div class="calc-sec__step-baloon step-3">Шаг 3 из 3</div>
                    </div>
                    <div class="calc-form">

                        <div v-show="mainform.type === 'Кредит'">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Расчет доходности после получения кредита</span>
                                <cool-select v-model="mainform.form1.payment" disable-search
                                    :items="['', 'Есть  расчёт', 'Нет расчёта', 'Хочу получить расчёт']"
                                    v-validate="'required'" name="mainform.form1.payment" />
                                <p v-show="errors.first('mainform.form1.payment')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Сейчас бухгалтерию ведет</span>
                                <cool-select v-model="mainform.form1.accounting" disable-search
                                    :items="['', 'Штатный сотрудник', 'Профильное в СХ агентство', 'Непрофильное в с СХ агентство', 'Своими силами']"
                                    v-validate="'required'" name="mainform.form1.accounting" />
                                <p v-show="errors.first('mainform.form1.accounting')">Поле обязательно для заполнения
                                </p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Имя и фамилия</span>
                                <input type="text" class="input calc-form__input js-input" v-model="mainform.form1.name"
                                    v-validate="'required'" name="mainform.form1.name">
                                <p v-show="errors.first('mainform.form1.name')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Телефон</span>
                                <input type="tel" class="input calc-form__input js-input" v-model="mainform.form1.phone"
                                    v-validate="'required'" name="mainform.form1.proc">
                                <p v-show="errors.first('mainform.form1.proc')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Электронная почта</span>
                                <input type="email" class="input calc-form__input js-input"
                                    v-model="mainform.form1.email" v-validate="'required|email'"
                                    name="mainform.form1.email">
                                <span v-show="errors.first('mainform.form1.email')">Поле обязательно для заполнения и
                                    должно быть формата email@email.com</span>
                            </label>
                        </div>

                        <div v-show="mainform.type === 'Грант'">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Имя и фамилия</span>
                                <input type="text" class="input calc-form__input js-input" v-model="mainform.form2.name"
                                    v-validate="'required'" name="mainform.form2.name">
                                <p v-show="errors.first('mainform.form2.name')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Телефон</span>
                                <input type="tel" class="input calc-form__input js-input" v-model="mainform.form2.phone"
                                    v-validate="'required'" name="mainform.form2.phone">
                                <p v-show="errors.first('mainform.form2.phone')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Электронная почта</span>
                                <input type="email" class="input calc-form__input js-input"
                                    v-model="mainform.form2.email" v-validate="'required|email'"
                                    name="mainform.form2.email">
                                <span v-show="errors.first('mainform.form2.email')">Поле обязательно для заполнения и
                                    должно быть формата email@email.com</span>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Должность</span>
                                <input type="text" class="input calc-form__input js-input"
                                    v-model="mainform.form2.position" v-validate="'required'"
                                    name="mainform.form2.position">
                                <p v-show="errors.first('mainform.form2.position')">Поле обязательно для заполнения</p>
                            </label>
                        </div>

                        <div v-show="mainform.type === 'Проектное финансирование'">
                            <div>
                            <label class="calc-form__label">
                                <span class="calc-form__label-title">Презентация</span>
                                <cool-select v-model="mainform.form3.present" 
                                    :items="['Есть, готов презентовать', 'Нет']" v-validate="'required'"
                                    name="mainform.form3.present"
                                    disable-search />
                                <p v-show="errors.first('mainform.form3.present')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label">
                                <span class="calc-form__label-title">От суммы проекта имеются собственные средства
                                </span>
                                <cool-select v-model="mainform.form3.sredstva" :items="['0%', '10%', '20%', '30%']"
                                    v-validate="'required'" name="mainform.form3.sredstva"
                                    disable-search />
                                <p v-show="errors.first('mainform.form3.sredstva')">Поле обязательно для заполнения</p>
                            </label>
                            </div>

                            <label class="calc-form__label">
                                <span class="calc-form__label-title">Имя и фамилия</span>
                                <input type="text" class="input calc-form__input " v-model="mainform.form3.name"
                                    v-validate="'required'" name="mainform.form3.name">
                                <p v-show="errors.first('mainform.form3.name')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label">
                                <span class="calc-form__label-title">Телефон</span>
                                <input type="text" class="input calc-form__input " v-model="mainform.form3.phone"
                                    v-validate="'required'" name="mainform.form3.phone">
                                <p v-show="errors.first('mainform.form3.phone')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Электронная почта</span>
                                <input type="email" class="input calc-form__input "
                                    v-model="mainform.form3.email" v-validate="'required|email'"
                                    name="mainform.form3.email">
                                <span v-show="errors.first('mainform.form3.email')">Поле обязательно для заполнения и
                                    должно быть формата email@email.com</span>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Должность или позиция в компании</span>
                                <input type="text" class="input calc-form__input "
                                    v-model="mainform.form3.position" v-validate="'required'"
                                    name="mainform.form3.position">
                                <p v-show="errors.first('mainform.form3.position')">Поле обязательно для заполнения</p>
                            </label>
                        </div>

                        <div v-show="mainform.type === 'Субсидия'">
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Имя и фамилия</span>
                                <input type="text" class="input calc-form__input js-input" v-model="mainform.form4.name"
                                    v-validate="'required'" name="mainform.form4.name">
                                <p v-show="errors.first('mainform.form4.name')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Телефон</span>
                                <input type="tel" class="input calc-form__input js-input" v-model="mainform.form4.phone"
                                    v-validate="'required'" name="mainform.form4.phone">
                                <p v-show="errors.first('mainform.form4.phone')">Поле обязательно для заполнения</p>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Электронная почта</span>
                                <input type="email" class="input calc-form__input js-input"
                                    v-model="mainform.form4.email" v-validate="'required|email'"
                                    name="mainform.form4.email">
                                <span v-show="errors.first('mainform.form4.email')">Поле обязательно для заполнения и
                                    должно быть формата email@email.com</span>
                            </label>
                            <label class="calc-form__label js-label">
                                <span class="calc-form__label-title">Должность</span>
                                <input type="text" class="input calc-form__input js-input"
                                    v-model="mainform.form4.position" v-validate="'required'"
                                    name="mainform.form4.position">
                                <p v-show="errors.first('mainform.form4.position')">Поле обязательно для заполнения</p>
                            </label>
                        </div>

                        <div class="calc-form__bar">
                            <div class="calc-form__bar-btns">
                                <button class="btn calc-form__back" @click="backPage">Назад</button>
                                <button class="btn btn--green" @click="sendForm"
                                    :disabled="loadbtn || checkBtn3">Отправить заявку</button>
                            </div>
                            <div class="calc-form__message">
                                Нажимая «Отправить заявку», вы принимаете <a href="http://agrodohod.ru/download/policy"
                                    target="_blank">условия передачи
                                    информации</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-show="result != ''">
            <div class="calc-ready">
                <div class="container">
                    <div class="calc-ready__blc">
                        <div class="calc-ready__blc-txt">
                            Вероятность получения <span>гранта</span> на сумму

                            <span>{{ summresult }}</span>

                            <i class="rub">&#8381;</i> составит
                        </div>
                        <div class="calc-ready__blc-persent">{{ result }}%</div>
                    </div>
                    <div class="calc-ready__txt">
                        Мы приняли вашу заявку. В ближайшее время с вами свяжется наш менеджер для уточнения деталей.
                    </div>
                    <a class="btn btn--green calc-ready__btn" @click="resetData">Пройти снова</a>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
    import {TheMask} from 'vue-the-mask'

    import {
        CoolSelect
    } from 'vue-cool-select'
    import VueSlider from 'vue-slider-component'
    import 'vue-slider-component/theme/antd.css'

    export default {
        components: {
            CoolSelect,
            VueSlider,
            TheMask
        },
        data() {
            return {
                opman: this.manager,
                focused: false,

                currentPage: 1,

                result: '',
                loadbtn: false,
                summresult: '',
                cityes: [
                    'Республика Адыгея (Адыгея)',
                    'Республика Башкортостан',
                    'Республика Бурятия',
                    'Республика Алтай',
                    'Республика Дагестан',
                    'Республика Ингушетия',
                    'Кабардино-Балкарская Республика',
                    'Республика Калмыкия',
                    'Карачаево-Черкесская Республика',
                    'Республика Карелия',
                    'Республика Коми',
                    'Республика Марий Эл',
                    'Республика Мордовия',
                    'Республика Саха (Якутия)',
                    'Республика Северная Осетия - Алания',
                    'Республика Татарстан (Татарстан)',
                    'Республика Тыва',
                    'Удмуртская Республика',
                    'Республика Хакасия',
                    'Чеченская Республика',
                    'Чувашская Республика - Чувашия',
                    'Алтайский край',
                    'Краснодарский край',
                    'Красноярский край',
                    'Приморский край',
                    'Ставропольский край',
                    'Хабаровский край',
                    'Амурская область',
                    'Архангельская область',
                    'Астраханская область',
                    'Белгородская область',
                    'Брянская область',
                    'Владимирская область',
                    'Волгоградская область',
                    'Вологодская область',
                    'Воронежская область',
                    'Ивановская область',
                    'Иркутская область',
                    'Калининградская область',
                    'Калужская область',
                    'Камчатский край',
                    'Кемеровская область',
                    'Кировская область',
                    'Костромская область',
                    'Курганская область',
                    'Курская область',
                    'Ленинградская область',
                    'Липецкая область',
                    'Магаданская область',
                    'Московская область',
                    'Мурманская область',
                    'Нижегородская область',
                    'Новгородская область',
                    'Новосибирская область',
                    'Омская область',
                    'Оренбургская область',
                    'Орловская область',
                    'Пензенская область',
                    'Пермский край',
                    'Псковская область',
                    'Ростовская область',
                    'Рязанская область',
                    'Самарская область',
                    'Саратовская область',
                    'Сахалинская область',
                    'Свердловская область',
                    'Смоленская область',
                    'Тамбовская область',
                    'Тверская область',
                    'Томская область',
                    'Тульская область',
                    'Тюменская область',
                    'Ульяновская область',
                    'Челябинская область',
                    'Забайкальский край',
                    'Ярославская область',
                    'Москва',
                    'Санкт-Петербург',
                    'Еврейская автономная область',
                    'Ненецкий автономный округ',
                    'Ханты-Мансийский автономный округ - Югра',
                    'Чукотский автономный округ',
                    'Ямало-Ненецкий автономный округ',
                    'Республика Крым',
                    'Севастополь'
                ],
                options: {
                    min: 500000,
                    max: 35000000,
                    width: 'auto',
                    dotSize: 40,
                    dotStyle: '#64dc66',
                    tooltip: 'none',
                    interval: 100000,
                },
                mainform: {
                    type: null,
                    sendpercent: this.percent,
                    sendpoint: this.point,
                    sourcetwo: null,
                    mailsubject: this.subject,
                    orgform: null,
                    mainh1: this.h1,
                    form1: {
                        region: null,
                        summ: 600000,
                        needprice: false,
                        // orgform: null,
                        dateur: '',
                        yearbalance: null,


                        history: null,
                        credit: null,
                        term: null,
                        target: null,
                        moment: null,

                        payment: null,
                        accounting: null,
                        name: '',
                        phone: '',
                        email: '',
                    },
                    form2: {
                        region: null,
                        // status: null,
                        summ: 600000,
                        have: null,

                        target: null,
                        type: null,
                        chlen: null,
                        term: null,
                        raschet: null,

                        name: '',
                        phone: '',
                        email: '',
                        position: ''
                    },
                    form3: {
                        // form: null,
                        summ: 600000,
                        studia: null,
                        balance: null,
                        history: null,

                        region: null,
                        srok: null,
                        finance: null,
                        zalog: null,
                        secondsrok: null,

                        present: null,
                        sredstva: null,
                        name: '',
                        phone: '',
                        email: '',
                        position: null,
                    },
                    form4: {
                        region: null,
                        // form: null,
                        type: null,
                        buhgalrer: null,

                        geter: null,
                        summ: 6000000,
                        need: false,
                        answer: null,
                        dolg: null,
                        proc: null,

                        name: '',
                        phone: '',
                        email: '',
                        position: null

                    }
                }
            }
        },

        props: ['percent', 'point', 'manager', 'subject', 'back', 'h1'],
        created() {
            if (this.opman == false) {
                this.mainform.sourcetwo = "Заявка с сайта";
                // console.log(this.mainform.sourcetwo);
            } else {
                this.mainform.sourcetwo = "Анкета";
            }
        },
        methods: {
            maxNum(){
                if(this.mainform.form1.summ > this.overOp){
                    this.mainform.form1.summ = this.overOp;
                }

                if(this.mainform.form1.summ < this.options.min){
                    this.mainform.form1.summ = this.options.min;
                }
            },
            maxNum2(){
                if(this.mainform.form2.summ > this.overOp){
                    this.mainform.form2.summ = this.overOp;
                }

                if(this.mainform.form2.summ < this.options.min){
                    this.mainform.form2.summ = this.options.min;
                }
            },
            maxNum3(){
                if(this.mainform.form3.summ > this.overOp){
                    this.mainform.form3.summ = this.overOp;
                }

                if(this.mainform.form3.summ < this.options.min){
                    this.mainform.form3.summ = this.options.min;
                }
            },
            maxNum4(){
                if(this.mainform.form4.summ > this.overOp){
                    this.mainform.form4.summ = this.overOp;
                }

                if(this.mainform.form4.summ < this.options.min){
                    this.mainform.form4.summ = this.options.min;
                }
            },
            openInput(string) {
                this.focused = true;
                this.$refs[string].focus();

            },
            onBlur() {
                this.focused = false
            },
            nextPage() {
                this.currentPage++;
            },
            backPage() {
                this.currentPage--;
            },
            resetData() {
                this.result = '';
                this.currentPage = 1;
            },
            sendForm() {

                if (this.mainform.type == 'Кредит') {

                    this.summresult = this.mainform.form1.summ;
                }

                if (this.mainform.type == 'Грант') {

                    this.summresult = this.mainform.form2.summ;
                }

                if (this.mainform.type == 'Проектное финансирование') {


                    this.summresult = this.mainform.form3.summ;
                }

                if (this.mainform.type == 'Субсидия') {

                    this.summresult = this.mainform.form4.summ;

                }
                this.loadbtn = true;


                axios.post(`/event/sendform`, this.mainform)
                    .then(response => {
                        this.result = response.data;
                        this.loadbtn = false;
                    })
                    .catch(error => {
                        if (!_.isEmpty(error.response)) {
                            if (error.response.status = 422) {
                                // this.errorsphone.name = error.response.data.errors;
                                alert('error')
                                this.loadbtn = false;
                            }
                        }
                    });

            }
        },
        computed: {
            overOp() {
                if ((this.mainform.type == 'Кредит')) {
                    return 35000000;
                }

                if ((this.mainform.type == 'Проектное финансирование')) {
                    return 500000000;
                }
                if ((this.mainform.orgform == 'ИП КФХ (существует менее 2 лет)') || (this.mainform.orgform ==
                    'Физлицо')) {
                    return 3000000;
                }
                if (this.mainform.orgform == 'ИП КФХ (существует более 2 лет)') {
                    return 30000000;
                }
                if (this.mainform.orgform == 'Глава кооператива') {
                    return 70000000;
                }
                if ((this.mainform.orgform == 'ИП') || (this.mainform.orgform == 'ООО') || (this.mainform.orgform ==
                        'ОАО') || (this.mainform.orgform == 'ЗАО') || (this.mainform.orgform == 'Другое')) {
                    return 3000000;
                }
                return 10000000;
            },
            checkError() {
                if ((this.mainform.orgform == 'ИП') && (this.mainform.type == 'Грант')) {
                    return true;
                }
                if ((this.mainform.orgform == 'ИП') && (this.mainform.type == 'Грант')) {
                    return true;
                }
                if ((this.mainform.orgform == 'ООО') && (this.mainform.type == 'Грант')) {
                    return true;
                }
                if ((this.mainform.orgform == 'ОАО') && (this.mainform.type == 'Грант')) {
                    return true;
                }
                if ((this.mainform.orgform == 'ЗАО') && (this.mainform.type == 'Грант')) {
                    return true;
                }
                if ((this.mainform.orgform == 'Другое') && (this.mainform.type == 'Грант')) {
                    return true;
                }


                if ((this.mainform.orgform == 'ИП КФХ (существует менее 2 лет)') && (this.mainform.type ==
                        'Проектное финансирование')) {
                    return true;
                }
                if ((this.mainform.orgform == 'ИП КФХ (существует более 2 лет)') && (this.mainform.type ==
                        'Проектное финансирование')) {
                    return true;
                }
                if ((this.mainform.orgform == 'Физлицо') && (this.mainform.type == 'Проектное финансирование')) {
                    return true;
                }
                if ((this.mainform.orgform == 'ИП') && (this.mainform.type == 'Проектное финансирование')) {
                    return true;
                }

                return false;

            },
            watchCheck() {
                if ((this.mainform.type == 'Кредит') && (this.mainform.form1.needprice == true)) {
                    return true;
                } else {
                    return false;
                }
            },
            checkBtn1: function () {

                if (this.mainform.sourcetwo == null) {
                    return true;
                }
                if (this.mainform.type == 'Кредит') {
                    if (
                        this.mainform.form1.region == null ||
                        this.mainform.form1.summ == null ||
                        this.mainform.form1.yearbalance == null ||
                        this.mainform.orgform == null ||
                        this.mainform.form1.yearbalance == null) {
                        return true;
                    }

                    if (this.mainform.orgform != 'Физлицо') {
                        if (this.mainform.form1.dateur == "") {
                            return true;
                        }
                    }
                }

                if (this.mainform.type == null) {
                    return true;
                }



                if (this.mainform.type == 'Грант') {
                    if (
                        this.mainform.form2.region == null ||
                        this.mainform.form2.summ == null ||
                        this.mainform.form2.have == null) {
                        return true;
                    }
                }

                if (this.mainform.type == 'Проектное финансирование') {
                    if (this.mainform.form3.summ == null ||
                        this.mainform.form3.studia == null ||
                        this.mainform.form3.balance == null ||
                        this.mainform.form3.history == null) {
                        return true;
                    }
                }

                if (this.mainform.type == 'Субсидия') {
                    if (
                        this.mainform.form4.region == null ||
                        this.mainform.form4.type == null ||
                        this.mainform.form4.buhgalrer == null) {
                        return true;
                    }
                }
            },
            checkBtn2: function () {
                if (this.mainform.type == 'Кредит') {
                    if (this.mainform.form1.history == null ||
                        this.mainform.form1.credit == null ||
                        this.mainform.form1.term == null ||
                        this.mainform.form1.target == null ||
                        this.mainform.form1.moment == null) {
                        return true;
                    }
                }
                if (this.mainform.type == 'Грант') {
                    if (this.mainform.form2.target == null ||
                        this.mainform.form2.type == null ||
                        this.mainform.form2.chlen == null ||
                        this.mainform.form2.term == null ||
                        this.mainform.form2.raschet == null) {
                        return true;
                    }
                }

                if (this.mainform.type == 'Проектное финансирование') {
                    if (this.mainform.form3.region == null ||
                        this.mainform.form3.srok == null ||
                        this.mainform.form3.finance == null ||
                        this.mainform.form3.zalog == null ||
                        this.mainform.form3.secondsrok == null) {
                        return true;
                    }
                }

                if (this.mainform.type == 'Субсидия') {
                    if (this.mainform.form4.geter == null ||
                        this.mainform.form4.answer == null ||
                        this.mainform.form4.dolg == null ||
                        this.mainform.form4.proc == null) {
                        return true;
                    }
                }
            },
            checkBtn3: function () {
                if (this.mainform.type == 'Кредит') {
                    if (
                        this.mainform.form1.payment == null ||
                        this.mainform.form1.accounting == null ||
                        this.mainform.form1.name == '' ||
                        this.mainform.form1.phone == '' ||
                        this.mainform.form1.email == '') {
                        return true;
                    }
                    if (this.errors.first('mainform.form1.email')) {
                        return true;
                    }
                }
                if (this.mainform.type == 'Грант') {
                    if (this.mainform.form2.name == '' ||
                        this.mainform.form2.phone == '' ||
                        this.mainform.form2.email == '' ||
                        this.mainform.form2.position == null) {
                        return true;
                    }
                    if (this.errors.first('mainform.form2.email')) {
                        return true;
                    }
                }

                if (this.mainform.type == 'Проектное финансирование') {
                    if (this.mainform.form3.present == null ||
                        this.mainform.form3.sredstva == null ||
                        this.mainform.form3.name == '' ||
                        this.mainform.form3.phone == '' ||
                        this.mainform.form3.email == '' ||
                        this.mainform.form3.position == null) {
                        return true;
                    }

                    if (this.errors.first('mainform.form3.email')) {
                        return true;
                    }
                }

                if (this.mainform.type == 'Субсидия') {
                    if (this.mainform.form4.name == '' ||
                        this.mainform.form4.phone == '' ||
                        this.mainform.form4.email == '' ||
                        this.mainform.form4.position == null) {
                        return true;
                    }

                    if (this.errors.first('mainform.form4.email')) {
                        return true;
                    }
                }
            },
        }
    }

</script>

<style lang="scss">
    /* Set the theme color of the component */
    $themeColor:#5dbb5f;

    /* import theme style */
    @import '~vue-slider-component/lib/theme/default.scss';

   @font-face {
    font-family: Rub; /* Имя шрифта */
    src: url('/event/fonts/subset-ALSRubl.ttf'); /* Путь к файлу со шрифтом */
   }

   .newrubi{
       font-family: Rub;
   }

    .IZ-select__menu--disable-search{
            top: auto !important;
    }

    .calc-form__label-title {
        background: #fff;
        top: 0;
        font-size: 13px;
        line-height: 16px;
        letter-spacing: -.05em;
        color: #5c5c5c;
    }

    .IZ-select__menu {
        z-index: 10000;
    }

    .IZ-select__input {
        input {
            height: 64px;
        }
    }

    input[type=date]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        display: none;
    }

    .IZ-select__no-data {
        display: none;
    }

    .out-input {
        margin: 0;
        outline: 0;
        border: 0;
        background: 0 0;
        text-align: center;
    }

    .new-selector {
        margin-bottom: 24px;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .isdissabled {
        background-color: #e9ecef;
    }

    .calc-form__label p {
        color: red;
    }
    .dis-num{
        color: #9C9C9C;
    }

    .isOverlay{
        background: transparent !important;
    }

</style>
