<template>

    <section class="calc-sec" id="js-form">
		<div v-show="result == ''">
       			<div class="container" v-show="currentPage === 1">
       				<h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span></h2>
       				<div class="calc-sec__wrap">
       					<div class="calc-sec__step">
       						<div class="calc-sec__step-baloon step-1">Шаг 1 из 3</div>
       					</div>
       					<div class="calc-form">

							<label class="calc-form__label js-label" v-show="manager">
       							<span class="calc-form__label-title">Источник заявки</span>
       							<select class="form-select" v-model="mainform.source" v-validate="'required'" name="mainform.source">
									<option></option>
									<option class="credit">Звонок</option>
									<option class="susidia">Личная встреча</option>
									<option class="grant">Грант</option>
									<option class="project">Другое</option>
								</select>
								<span v-show="errors.first('mainform.source')">Поле обязательно для заполнения</span>
       						</label>

       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Вид финансирования</span>
       							<select class="form-select" v-model="mainform.type" @change="changes" v-validate="'required'" name="mainform.type">
									<option></option>
									<option class="credit" value="Кредит">Кредит</option>
									<option class="susidia" value="Субсидия">Субсидия</option>
									<option class="grant" value="Грант">Грант</option>
									<option class="project" value="Проектное финансирование">Проектное финансирование</option>
								</select>
								<span v-show="errors.first('mainform.type')">Поле обязательно для заполнения</span>
       						</label>

							<div v-show="mainform.type === ''">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Регион</span>
									<select class="form-select" name="add-employer-positions" data-placeholder=" " disabled="disabled">
										<option></option>
									</select>
								</label>

								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Организационная форма</span>
									<select class="form-select" name="add-employer-positions" data-placeholder=" " disabled="disabled">
										<option></option>
									</select>
								</label>

								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Дата создания юридического лица</span>
									<input type="text" class="input calc-form__input js-input" disabled="disabled">
								</label>

								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Годовой баланс</span>
									<select class="form-select" name="add-employer-positions" data-placeholder=" "  disabled="disabled">
										<option></option>
									</select>
								</label>
							</div>

							<div v-show="mainform.type === 'Кредит'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Регион</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form1.region" v-validate="'required'" name="mainform.form1.region">
										<option></option>
										<option>Все регионы РФ</option>
										<option>Все ригионы РФ кроме СКФО</option>
										<option>СКФО (за исключением Ставропольского Края)</option>
									</select>
									<p v-show="errors.first('mainform.form1.region')">Поле обязательно для заполнения</p>
								</label>
								<div class="calc-form__slider js-rang-slider">
									<div class="calc-form__slider-txt">Сумма кредита</div>
									<label class="calc-form__slider-val" >
										<input type="text" id="amount-4" class="input calc-form__slider-input" value="5000000" v-model="mainform.form1.summ"> 
										<span class="js-slider-txt"></span><span class="rub">i</span>
									</label>       							
									<div class="calc-form__slider-blc" id="slider-range-credit"></div>
									<div class="calc-form__slider-row">
										<div><span class="js-min"></span> <span class="rub">i</span></div>
										<div><span class="js-max"></span> <span class="rub">i</span></div>
									</div>
								</div>
								<label class="calc-form__checkbox">
									<input type="checkbox" id="js-check-toggler" v-model="mainform.form1.needprice">
									<span class="calc-form__checkbox-dop"></span>
									<span class="calc-form__checkbox-txt">Нужен расчет от АгроДохода</span>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Организационная форма</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form1.orgform" @change="mainform.form1.dateur = ''" v-validate="'required'" name="mainform.form1.orgform">
										<option></option>
										<option>Физлицо</option>
										<option>ИП</option>
										<option>ООО</option>
										<option>Кооператив</option>
										<option>Холдинг</option>
									</select>
									<p v-show="errors.first('mainform.form1.orgform')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Дата создания юридического лица</span>
									<input type="date" class="input calc-form__input js-input" v-model="mainform.form1.dateur" :disabled="mainform.form1.orgform == 'Физлицо'">
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Годовой баланс</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form1.yearbalance"  v-validate="'required'" name="mainform.form1.yearbalance">
										<option></option>
										<option>Положительный баланс</option>
										<option>Отрицательный баланс</option>
										<option>Нулевой баланс</option>
									</select>
									<p v-show="errors.first('mainform.form1.yearbalance')">Поле обязательно для заполнения</p>
								</label>
							</div>

							<div v-show="mainform.type === 'Грант'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Регион</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.region" v-validate="'required'" name="mainform.form2.region">
										<option></option>
										<option>Все регионы РФ</option>
										<option>Все ригионы РФ кроме СКФО</option>
										<option>СКФО (за исключением Ставропольского Края)</option>
										<option>Ставропольский Край</option>
									</select>
									<p v-show="errors.first('mainform.form2.region')">Поле обязательно для заполнения</p>
								</label>

								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Статус</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.status" v-validate="'required'" name="mainform.form2.status"> 
										<option></option>
										<option>ИП КФХ (существует менее 2 лет)</option>
										<option>ИП КФХ (существует более 2 лет)</option>
										<option>Глава кооператива</option>
										<option>Физлицо</option>
										<option>ИП</option>
										<option>ООО</option>
										<option>ОАО</option>
										<option>ЗАО</option>
										<option>Другое</option>
									</select>
									<p v-show="errors.first('mainform.form2.status')">Поле обязательно для заполнения</p>
								</label>
								<div class="calc-form__slider js-rang-slider">
									<div class="calc-form__slider-txt">Доступен грант «Начинающий фермер». Какая сумма необходима?</div>
									<label class="calc-form__slider-val" >
										<input type="text" id="amount-2" class="input calc-form__slider-input" value="400000" v-model="mainform.form2.summ"  v-validate="'required'" name="mainform.form2.summ">
										<span class="js-slider-txt"></span><span class="rub">i</span>
									</label>       							
									<div class="calc-form__slider-blc" id="slider-range-grant"></div>
									<div class="calc-form__slider-row">
										<div><span class="js-min"></span> <span class="rub">i</span></div>
										<div><span class="js-max"></span> <span class="rub">i</span></div>
									</div>
								</div>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Наличие 10% от запрашиваемой суммы <span>на счету</span><sup>*</sup></span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.have" v-validate="'required'" name="mainform.form2.have">
										<option></option>
										<option>Да</option>
										<option>Нет</option>
									</select>
									<span class="calc-form__label-sub">*Требование комиссии при подаче заявки на грант</span>
									<p v-show="errors.first('mainform.form2.have')">Поле обязательно для заполнения</p>
								</label>
							</div>

							<div v-show="mainform.type === 'Проектное финансирование'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Правовая форма собственности</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.form" v-validate="'required'" name="mainform.form3.form">
										<option></option>
										<option>ООО</option>
										<option>Холдинг</option>
										<option>ЗАО</option>
										<option>ОАО</option>
										<option>Другое</option>
									</select>
									<p v-show="errors.first('mainform.form3.form')">Поле обязательно для заполнения</p>
								</label>
								
								<div class="calc-form__slider js-rang-slider">
									<div class="calc-form__slider-txt">Сумма проекта</div>
									<label class="calc-form__slider-val" >
										<input type="text" id="amount-5" class="input calc-form__slider-input"  v-model="mainform.form3.summ" v-validate="'required'" name="mainform.form3.summ">
										<span class="js-slider-txt"></span><span class="rub">i</span>
									</label>       							
									<div class="calc-form__slider-blc" id="slider-range-project"></div>
									<div class="calc-form__slider-row">
										<div><span class="js-min"></span> <span class="rub">i</span></div>
										<div><span class="js-max"></span> <span class="rub">i</span></div>
									</div>
								</div>

								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Стадия проекта</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.studia" v-validate="'required'" name="mainform.form3.studia">
										<option></option>
										<option>Идея</option>
										<option>Есть бизнес план</option>
										<option>Составьте мне бизнес-план</option>
										<option>В процессе реализации</option>
									</select>
									<p v-show="errors.first('mainform.form3.form')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Бухгалтерский баланс</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.balance" v-validate="'required'" name="mainform.form3.balance">
										<option></option>
										<option>Положительный баланс</option>
										<option>Отрицательный баланс</option>
										<option>Нулевой баланс</option>
										<option>Необходим аудит</option>
									</select>
									<p v-show="errors.first('mainform.form3.balance')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Кредитная история</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.history" v-validate="'required'" name="mainform.form3.history">
										<option></option>
										<option>Чистая кредитная история</option>
										<option>Хорошая кредитная история</option>
										<option>Плохая кредитная история</option>
									</select>
									<p v-show="errors.first('mainform.form3.history')">Поле обязательно для заполнения</p>
								</label>
							</div>

							<div v-show="mainform.type === 'Субсидия'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Регион</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.region" v-validate="'required'" name="mainform.form3.region">
										<option></option>
										<option>Все регионы РФ</option>
										<option>Все ригионы РФ кроме СКФО</option>
										<option>СКФО (за исключением Ставропольского Края)</option>
										<option>Ставропольский Край</option>
									</select>
									<p v-show="errors.first('mainform.form3.region')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Организационная форма</span>
									<select class="form-select"  data-placeholder=" " v-model="mainform.form4.form" v-validate="'required'" name="mainform.form4.form">
										<option></option>
										<option>ИП КФХ (существует менее 2 лет)</option>
										<option>ИП КФХ (существует более 2 лет)</option>
										<option>Глава кооператива</option>
										<option>Физлицо</option>
										<option>ИП</option>
										<option>ООО</option>
										<option>ОАО</option>
										<option>ЗАО</option>
										<option>Другое</option>
									</select>
									<p v-show="errors.first('mainform.form4.form')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Тип хозяйства</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.type" v-validate="'required'" name="mainform.form4.type">
										<option></option>
										<option>Животноводство</option>
										<option>Растениеводство</option>
										<option>Овощеводство</option>
										<option>Производство</option>
									</select>
									<p v-show="errors.first('mainform.form4.type')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Сейчас бухгалтерию ведет</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.buhgalrer" v-validate="'required'" name="mainform.form4.buhgalrer">
										<option></option>
										<option>Штатный сотрудник</option>
										<option>Профильное в СХ агентство</option>
										<option>Непрофильное в с СХ агентство</option>
										<option>Своими силами</option>
									</select>
									<p v-show="errors.first('mainform.form4.buhgalrer')">Поле обязательно для заполнения</p>
								</label>
							</div>


							<div class="calc-form__bar" v-show="mainform.type != ''">
								<button class="btn btn--green" @click="nextPage" :disabled="checkBtn1">Далее</button>
							</div>
       					</div>
       				</div>
       			</div>
				<div class="container"  v-show="currentPage === 2">
       				<h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span></h2>
       				<div class="calc-sec__wrap">
       					<div class="calc-sec__step">
       						<div class="calc-sec__step-baloon step-2">Шаг 2 из 3</div>
       					</div>
       					<div class="calc-form">

							<div v-show="mainform.type === 'Кредит'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Кредитная история</span>
									<select class="form-select"  data-placeholder=" "
									v-model="mainform.form1.history"
									v-validate="'required'" name="mainform.form1.history">
										<option></option>
										<option>Чистая кредитная история</option>
										<option>Хорошая кредитная история</option>
										<option>Плохая кредитная история</option>
									</select>
									<p v-show="errors.first('mainform.form1.history')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Залоги под кредит </span>
									<select class="form-select" 
									v-model="mainform.form1.credit"
									v-validate="'required'" name="mainform.form1.credit">
										<option></option>
										<option>Недвижимость</option>
										<option>Техника</option>
										<option>Поголовье</option>
										<option>Оборудование</option>
										<option>Ничего из перечисленного</option>
									</select>
									<p v-show="errors.first('mainform.form1.credit')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Желаемые сроки для погашения кредита</span>
									<select class="form-select" data-placeholder=" "
									v-model="mainform.form1.term"
									v-validate="'required'" name="mainform.form1.term">
										<option></option>
										<option>сроки-1</option>
										<option>сроки-2</option>
										<option>сроки-3</option>
									</select>
									<p v-show="errors.first('mainform.form1.term')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Цель привлечения средств</span>
									<select class="form-select" data-placeholder=" "
									v-model="mainform.form1.target"
									v-validate="'required'" name="mainform.form1.target">
										<option></option>
										<option>Пополнение оборотных средств</option>
										<option>Развитие</option>
										<option>Модернизация</option>
										<option>Стартап</option>
										<option>Другое</option>
									</select>
									<p v-show="errors.first('mainform.form1.target')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Расчет доходности на текущий момент</span>
									<select class="form-select" data-placeholder=" "
									v-model="mainform.form1.moment"
									v-validate="'required'" name="mainform.form1.moment">
										<option></option>
										<option>Есть  расчёт</option>
										<option>Нет расчёта</option>
										<option>Хочу получить расчёт</option>
									</select>
									<p v-show="errors.first('mainform.form1.moment')">Поле обязательно для заполнения</p>
								</label>
							</div>

							<div v-show="mainform.type === 'Грант'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Цель получения гранта</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.target"
									v-validate="'required'" name="mainform.form2.target">
										<option></option>
										<option>Расширения</option>
										<option>Модернизации</option>
										<option>Стартап</option>
										<option>Другое</option>
									</select>
									<p v-show="errors.first('mainform.form2.target')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Тип хозяйства</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.type"
									v-validate="'required'" name="mainform.form2.type">
										<option></option>
										<option>Животноводство</option>
										<option>Растениеводство</option>
										<option>Овощеводство</option>
										<option>Производство</option>
									</select>
									<p v-show="errors.first('mainform.form2.type')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Членство в кооперативе</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.chlen"
									v-validate="'required'" name="mainform.form2.chlen">
										<option></option>
										<option>Да</option>
										<option>Нет</option>
										<option>Являюсь председателем</option>
									</select>
									<p v-show="errors.first('mainform.form2.chlen')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Расчет доходности хозяйства на текущий момент</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.term"
									v-validate="'required'" name="mainform.form2.term">
										<option></option>
										<option>Есть</option>
										<option>Отсутствует</option>
										<option>Хочу получить</option>
									</select>
									<p v-show="errors.first('mainform.form2.term')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Расчет доходности после получения гранта</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.raschet"
									v-validate="'required'" name="mainform.form2.raschet">
										<option></option>
										<option>Есть</option>
										<option>Отсутствует</option>
										<option>Хочу получить</option>
									</select>
									<p v-show="errors.first('mainform.form2.raschet')">Поле обязательно для заполнения</p>
								</label>
							</div>

							<div v-show="mainform.type === 'Проектное финансирование'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Регион ведения деятельности</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.region"
									v-validate="'required'" name="mainform.form3.region">
										<option></option>
										<option>Все регионы РФ</option>
										<option>Все ригионы РФ кроме СКФО</option>
										<option>СКФО (за исключением Ставропольского Края)</option>
										<option>Ставропольский Край</option>
									</select>
									<p v-show="errors.first('mainform.form3.region')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Срок выплаты кредита</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.srok"
									v-validate="'required'" name="mainform.form3.srok">
										<option></option>
										<option>от 1 года</option>
										<option>до 15 лет</option>
									</select>
									<p v-show="errors.first('mainform.form3.region')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Финансовая модель</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.finance"
									v-validate="'required'" name="mainform.form3.finance">
										<option></option>
										<option>Есть</option>
										<option>Нет</option>
										<option>Составьте мне</option>
									</select>
									<p v-show="errors.first('mainform.form3.finance')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Залоги под финансирование</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.zalog"
									v-validate="'required'" name="mainform.form3.zalog">
										<option></option>
										<option>Недвижимость</option>
										<option>Техника</option>
										<option>Оборудование</option>
										<option>Ничего из перечисленного</option>
									</select>
									<p v-show="errors.first('mainform.form3.zalog')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Срок окупаемости проекта</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.secondsrok"
									v-validate="'required'" name="mainform.form3.secondsrok">
										<option></option>
										<option value="Срок-1">Срок-1</option>
										<option value="Срок-2">Срок-2</option>
										<option value="Срок-3">Срок-3</option>
									</select>
									<p v-show="errors.first('mainform.form3.secondsrok')">Поле обязательно для заполнения</p>
								</label>
							</div>

							<div v-show="mainform.type === 'Субсидия'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Получение субсидий ранее </span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.geter"
									v-validate="'required'" name="mainform.form4.geter">
										<option></option>
										<option>Получал</option>
										<option>Не получал</option>
									</select>
									<p v-show="errors.first('mainform.form4.geter')">Поле обязательно для заполнения</p>
								</label>
								
								<div class="calc-form__slider js-rang-slider">
									<div class="calc-form__slider-txt">Размер понесенных затрат к возмещению</div>
									<label class="calc-form__slider-val" >
										<input type="text" id="amount-3" class="input calc-form__slider-input" value="1000000" v-model="mainform.form4.summ"
										v-validate="'required'" name="mainform.form1.history">
										<span class="js-slider-txt"></span><span class="rub">i</span>
									</label>       							
									<div class="calc-form__slider-blc" id="slider-range-subs"></div>
									<div class="calc-form__slider-row">
										<div><span class="js-min"></span> <span class="rub">i</span></div>
										<div><span class="js-max"></span> <span class="rub">i</span></div>
									</div>
								</div>

								<label class="calc-form__checkbox">
									<input type="checkbox" id="js-check-toggler" v-model="mainform.form4.need">
									<span class="calc-form__checkbox-dop"></span>
									<span class="calc-form__checkbox-txt">Нужен расчет от АгроДохода</span>
								</label>

								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Обоснование затрат к возмещению</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.answer"
									v-validate="'required'" name="mainform.form4.answer">
										<option></option>
										<option>Есть</option>
										<option>Нет</option>
										<option>Нужна консультация</option>
									</select>
									<p v-show="errors.first('mainform.form4.answer')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Задолженность по налогам</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.dolg"
									v-validate="'required'" name="mainform.form4.dolg">
										<option></option>
										<option>Есть</option>
										<option>Нет</option>
									</select>
									<p v-show="errors.first('mainform.form4.dolg')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Процедура банкротства</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.proc"
									v-validate="'required'" name="mainform.form4.proc">
										<option></option>
										<option>Есть</option>
										<option>Нет</option>
									</select>
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
       			<div class="container"  v-show="currentPage === 3">
       				<h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span></h2>
       				<div class="calc-sec__wrap">
       					<div class="calc-sec__step">
       						<div class="calc-sec__step-baloon step-3">Шаг 3 из 3</div>
       					</div>
       					<div class="calc-form">

							<div v-show="mainform.type === 'Кредит'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Расчет доходности после получения кредита</span>
									<select class="form-select" data-placeholder=" "
									v-model="mainform.form1.payment"
									v-validate="'required'" name="mainform.form1.payment">
										<option></option>
										<option>Есть  расчёт</option>
										<option>Нет расчёта</option>
										<option>Хочу получить расчёт</option>
									</select>
									<p v-show="errors.first('mainform.form1.payment')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Сейчас бухгалтерию ведет</span>
									<select class="form-select" data-placeholder=" "
									v-model="mainform.form1.accounting"
									v-validate="'required'" name="mainform.form1.accounting">
										<option></option>
										<option>Штатный сотрудник</option>
										<option>Профильное в СХ агентство</option>
										<option>Непрофильное в с СХ агентство</option>
										<option>Своими силами</option>
									</select>
									<p v-show="errors.first('mainform.form1.accounting')">Поле обязательно для заполнения</p>
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
									<input type="email" class="input calc-form__input js-input" v-model="mainform.form1.email" v-validate="'required|email'" name="mainform.form1.email">
									<span v-show="errors.first('mainform.form1.email')">Поле обязательно для заполнения и должно быть формата email@email.com</span>
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
									<input type="email" class="input calc-form__input js-input" v-model="mainform.form2.email" v-validate="'required|email'" name="mainform.form2.email">
									<span v-show="errors.first('mainform.form2.email')">Поле обязательно для заполнения и должно быть формата email@email.com</span>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Должность</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form2.position"
									v-validate="'required'" name="mainform.form2.position">
										<option></option>
										<option value="Должность-1">Должность-1</option>
										<option value="Должность-2">Должность-2</option>
										<option value="Должность-3">Должность-3</option>
									</select>
									<p v-show="errors.first('mainform.form2.position')">Поле обязательно для заполнения</p>
								</label>
							</div>

							<div v-show="mainform.type === 'Проектное финансирование'">
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Презентация</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.present"
									v-validate="'required'" name="mainform.form3.present">
										<option></option>
										<option>Есть, готов презентовать</option>
										<option>Нет</option>
									</select>
									<p v-show="errors.first('mainform.form3.present')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">От суммы проекта имеются собственные средства </span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.sredstva"
									v-validate="'required'" name="mainform.form3.sredstva">
										<option></option>
										<option>0%</option>
										<option>10%</option>
										<option>20%</option>
										<option>30%</option>
									</select>
									<p v-show="errors.first('mainform.form3.sredstva')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Имя и фамилия</span>
									<input type="text" class="input calc-form__input js-input" v-model="mainform.form3.name"
									v-validate="'required'" name="mainform.form3.name">
									<p v-show="errors.first('mainform.form3.name')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Телефон</span>
									<input type="tel" class="input calc-form__input js-input" v-model="mainform.form3.phone"
									v-validate="'required'" name="mainform.form3.phone">
									<p v-show="errors.first('mainform.form3.phone')">Поле обязательно для заполнения</p>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Электронная почта</span>
									<input type="email" class="input calc-form__input js-input" v-model="mainform.form3.email" v-validate="'required|email'" name="mainform.form3.email">
									<span v-show="errors.first('mainform.form3.email')">Поле обязательно для заполнения и должно быть формата email@email.com</span>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Должность или позиция в компании</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form3.position"
									v-validate="'required'" name="mainform.form3.position">
										<option></option>
										<option value="Должность-1">Должность-1</option>
										<option value="Должность-2">Должность-2</option>
										<option value="Должность-3">Должность-3</option>
									</select>
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
									<input type="email" class="input calc-form__input js-input" v-model="mainform.form4.email" v-validate="'required|email'" name="mainform.form4.email">
									<span v-show="errors.first('mainform.form4.email')">Поле обязательно для заполнения и должно быть формата email@email.com</span>
								</label>
								<label class="calc-form__label js-label">
									<span class="calc-form__label-title">Должность</span>
									<select class="form-select" data-placeholder=" " v-model="mainform.form4.position"
									v-validate="'required'" name="mainform.form4.position">
										<option></option>
										<option value="Должность-1">Должность-1</option>
										<option value="Должность-2">Должность-2</option>
										<option value="Должность-3">Должность-3</option>
									</select>
									<p v-show="errors.first('mainform.form4.position')">Поле обязательно для заполнения</p>
								</label>
							</div>

       						<div class="calc-form__bar">
       							<div class="calc-form__bar-btns">
									<button class="btn calc-form__back" @click="backPage">Назад</button>
									<button class="btn btn--green" @click="sendForm" :disabled="loadbtn || checkBtn3">Отправить заявку</button>
       							</div>
       							<div class="calc-form__message">
       								Нажимая «Отправить заявку», вы принимаете <a href="#" target="_blank">условия передачи информации</a>
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
							
							<i class="rub">i</i> составит
						</div>
           				<div class="calc-ready__blc-persent">{{ result }}%</div>
            		</div>
            		<div class="calc-ready__txt">
            			Мы приняли вашу заявку.  В ближайшее время с вами свяжется наш менеджер для уточнения деталей.
            		</div>
            		<a class="btn btn--green calc-ready__btn" @click="resetData">Пройти снова</a>
            	</div>
            </div>
		</div>
    </section>

</template>

<script>
    export default {
        data() {
            return {
				currentPage: 1,

				result: '',
		
				loadbtn: false,
				summresult: '',
				mainform: {
					type: '',
					sendpercent: this.percent,
					sendpoint: this.point,
					source: '',
					form1: {
						region: '',
						summ: '5000000',
						needprice: false,
						orgform: '',
						dateur: '',
						yearbalance: '',
						

						history: '',
						credit: '',
						term: '',
						target: '',
						moment: '',

						payment: '',
						accounting: '',
						name: '',
						phone: '',
						email: '',
					},
					form2: {
						region: '',
						status: '',
						summ: '45000000',
						have: '',

						target: '',
						type: '',
						chlen: '',
						term: '',
						raschet: '',

						name: '',
						phone: '',
						email: '',
						position: ''
					},
					form3: {
						form: '',
						summ: '45000000',
						studia: '',
						balance: '',
						history: '',

						region: '',
						srok: '',
						finance: '',
						zalog: '',
						secondsrok: '',

						present: '',
						sredstva: '',
						name: '',
						phone: '',
						email: '',
						position: '',
					}, 
					form4: {
						region: '',
						form: '',
						type: '',
						buhgalrer: '',

						geter: '',
						summ: '1000000',
						need: '',
						answer: '',
						dolg: '',
						proc: '',

						name: '',
						phone: '',
						email: '',
						position: ''

					}	
				}
            }
        },
        props: ['percent', 'point', 'manager'],
        mounted() {
			if(this.manager == false) {
				this.mainform.source = 'Анкета на сайте';
			}
			
        },
        methods: {
            nextPage(){
                console.log(123);
                this.currentPage++;
            },
            backPage(){
                this.currentPage--;
			},
			changes(){
				console.log('123');
			},
			resetData(){
				this.result = '';
				this.currentPage = 1;
			},
			sendForm(){

				if(this.mainform.type == 'Кредит'){
		
					this.summresult = this.mainform.form1.summ;
				}

				if(this.mainform.type == 'Грант'){

					this.summresult = this.mainform.form2.summ;
				}

				if(this.mainform.type == 'Проектное финансирование'){


					this.summresult = this.mainform.form3.summ;
				}

				if(this.mainform.type == 'Субсидия'){

					this.summresult = this.mainform.form4.summ;
					
				}
				this.loadbtn = true;

				
				axios.post(`/event/sendform`, this.mainform)
					.then(response => {
						this.result = response.data;
						this.loadbtn = false;
					})
					.catch(error => {
							if (! _.isEmpty(error.response)) {
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
			checkBtn1: function(){

				if(this.mainform.source == '') {
					return true;
				}
				if(this.mainform.type == 'Кредит'){
					if(
					this.mainform.form1.region  == '' ||  
					this.mainform.form1.summ  == '' ||
					this.mainform.form1.yearbalance == '' ||
					this.mainform.form1.orgform == '' ||
					this.mainform.form1.yearbalance == ''){
						return true;
					}

					if(this.mainform.form1.orgform != 'Физлицо'){
						if(this.mainform.form1.dateur == '') {
							return true;
						}
					}
				}

				

				if(this.mainform.type == 'Грант'){
					if(
					this.mainform.form2.region  == '' ||  
					this.mainform.form2.status  == '' ||
					this.mainform.form2.summ == '' ||
					this.mainform.form2.have == ''){
						return true;
					}
				}

				if(this.mainform.type == 'Проектное финансирование'){
					if(
					this.mainform.form3.form == '' || 
					this.mainform.form3.summ  == '' ||  
					this.mainform.form3.studia  == '' ||
					this.mainform.form3.balance == '' ||
					this.mainform.form3.history == ''){
						return true;
					}
				}

				if(this.mainform.type == 'Субсидия'){
					if(
					this.mainform.form4.region  == '' ||  
					this.mainform.form4.form  == '' ||
					this.mainform.form4.type == '' ||
					this.mainform.form5.buhgalrer == ''){
						return true;
					}
				}
			},
			checkBtn2: function(){
				if(this.mainform.type == 'Кредит'){
					if(this.mainform.form1.history  == '' ||
					this.mainform.form1.credit  == '' ||  
					this.mainform.form1.term  == '' ||
					this.mainform.form1.target == '' ||
					this.mainform.form1.moment == ''){
						return true;
					}
				}
				if(this.mainform.type == 'Грант'){
				if(this.mainform.form2.target  == '' ||  
					this.mainform.form2.type  == '' ||
					this.mainform.form2.chlen == '' ||
					this.mainform.form2.term == '' ||
					this.mainform.form2.raschet == ''){
						return true;
					}
				}

				if(this.mainform.type == 'Проектное финансирование'){
					if(this.mainform.form3.region == '' ||  
					this.mainform.form3.srok  == '' ||
					this.mainform.form3.finance == '' ||
					this.mainform.form3.zalog == '' ||
					this.mainform.form3.secondsrok == ''){
						return true;
					}
				}

				if(this.mainform.type == 'Субсидия'){
					if(this.mainform.form4.geter  == '' ||  
					this.mainform.form4.summ  == '' ||
					this.mainform.form4.need == '' ||
					this.mainform.form4.answer == '' ||
					this.mainform.form4.dolg == '' ||
					this.mainform.form4.proc == ''){
						return true;
					}
				}
			},			
			checkBtn3: function(){
				if(this.mainform.type == 'Кредит'){
					if(
					this.mainform.form1.payment  == '' ||  
					this.mainform.form1.accounting  == '' ||
					this.mainform.form1.name == '' ||
					this.mainform.form1.phone == '' ||
					this.mainform.form1.email == ''){
						return true;
					}
					if(this.errors.first('mainform.form1.email')){
						return true;
					}
				}
				if(this.mainform.type == 'Грант'){
					if(this.mainform.form2.name  == '' ||  
						this.mainform.form2.phone  == '' ||
						this.mainform.form2.email == '' ||
						this.mainform.form2.position == ''){
							return true;
						}
					if(this.errors.first('mainform.form2.email')){
						return true;
					}
				}

				if(this.mainform.type == 'Проектное финансирование'){
					if(this.mainform.form3.present == '' ||  
					this.mainform.form3.sredstva  == '' ||
					this.mainform.form3.name == '' ||
					this.mainform.form3.phone == '' ||
					this.mainform.form3.email == '' ||
					this.mainform.form3.position == ''){
						return true;
					}

					if(this.errors.first('mainform.form3.email')){
						return true;
					}
				}

				if(this.mainform.type == 'Субсидия'){
					if(this.mainform.form4.name  == '' ||  
					this.mainform.form4.phone  == '' ||
					this.mainform.form4.email == '' ||
					this.mainform.form4.position== ''){
						return true;
					}

					if(this.errors.first('mainform.form4.email')){
						return true;
					}
				}
			}
		}
    }
</script>