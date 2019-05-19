<template>

           		<section class="calc-sec" id="js-form">
       			<div class="container" v-show="currentPage === 1">
       				<h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span></h2>
       				<div class="calc-sec__wrap">
       					<div class="calc-sec__step">
       						<div class="calc-sec__step-baloon step-1">Шаг 1 из 3</div>
       					</div>
       					<div class="calc-form">
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Вид финансирования</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" " v-model="type">
									<option></option>
									<option class="credit" value="Кредит">Кредит</option>
									<option class="susidia" value="Субсидия">Субсидия</option>
									<option class="grant" value="Грант">Грант</option>
									<option class="project" value="Проектное финансирование">Проектное финансирование</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Регион</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" " v-model="region">
									<option></option>
									<option value="Регион-1">Регион-1</option>
									<option value="Регион-2">Регион-2</option>
									<option value="Регион-3">Регион-3</option>
								</select>
       						</label>
       						<div class="calc-form__slider js-rang-slider">
       							<div class="calc-form__slider-txt">Сумма кредита</div>
       							<label class="calc-form__slider-val" >
       								<input type="text" id="amount-4" class="input calc-form__slider-input" value="5000000" v-model="summ"> 
       								<span class="js-slider-txt"></span><span class="rub">i</span>
       							</label>       							
       							<div class="calc-form__slider-blc" id="slider-range-credit"></div>
       							<div class="calc-form__slider-row">
       								<div><span class="js-min"></span> <span class="rub">i</span></div>
       								<div><span class="js-max"></span> <span class="rub">i</span></div>
       							</div>
       						</div>
       						<label class="calc-form__checkbox">
       							<input type="checkbox" id="js-check-toggler" v-model="needprice">
       							<span class="calc-form__checkbox-dop"></span>
       							<span class="calc-form__checkbox-txt">Нужен расчет от АгроДохода</span>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Организационная форма</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" " v-model="orgform">
									<option></option>
									<option value="форма-1">форма-1</option>
									<option value="форма-2">форма-2</option>
									<option value="форма-3">форма-3</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Дата создания юридического лица</span>
       							<input type="text" class="input calc-form__input js-input" v-model="dateur">
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Годовой баланс</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" " v-model="yearbalance">
									<option></option>
									<option value="баланс-1">баланс-1</option>
									<option value="баланс-2">баланс-2</option>
									<option value="баланс-3">баланс-3</option>
								</select>
       						</label>
       						<div class="calc-form__bar">
       							<button class="btn btn--green calc-form__submit" @click="nextPage">Далее</button>
       						</div>
       					</div>
       				</div>
       			</div>
                <div class="container" v-show="currentPage === 2">
       				<h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span></h2>
       				<div class="calc-sec__wrap">
       					<div class="calc-sec__step">
       						<div class="calc-sec__step-baloon step-2">Шаг 2 из 3</div>
       					</div>
       					<form action="#" method="post" class="calc-form">
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Кредитная история</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" ">
									<option></option>
									<option value="история-1">история-1</option>
									<option value="история-2">история-2</option>
									<option value="история-3">история-3</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Залоги под кредит </span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" ">
									<option></option>
									<option value="Залоги-1">Залоги-1</option>
									<option value="Залоги-2">Залоги-2</option>
									<option value="Залоги-3">Залоги-3</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Желаемые сроки для погашения кредита</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" ">
									<option></option>
									<option value="сроки-1">сроки-1</option>
									<option value="сроки-2">сроки-2</option>
									<option value="сроки-3">сроки-3</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Цель привлечения средств</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" ">
									<option></option>
									<option value="Цель-1">Цель-1</option>
									<option value="Цель-2">Цель-2</option>
									<option value="Цель-3">Цель-3</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Расчет доходности на текущий момент</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" ">
									<option></option>
									<option value="Расчет-1">Расчет-1</option>
									<option value="Расчет-2">Расчет-2</option>
									<option value="Расчет-3">Расчет-3</option>
								</select>
       						</label>
       						<div class="calc-form__bar">
       							<div class="calc-form__bar-btns">
									<button class="btn calc-form__back" @click="backPage">Назад</button>
									<button class="btn btn--green calc-form__submit" @click="nextPage">Далее</button>
       							</div>
       						</div>
       					</form>
       				</div>
       			</div>
                <div class="container" v-show="currentPage === 3">
       				<h2 class="sec__title">Заполните заявку <span>узнайте шансы на получение денег в режиме онлайн</span></h2>
       				<div class="calc-sec__wrap">
       					<div class="calc-sec__step">
       						<div class="calc-sec__step-baloon step-3">Шаг 3 из 3</div>
       					</div>
       					<form action="#" method="post" class="calc-form">
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Расчет доходности после получения кредита</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" ">
									<option></option>
									<option value="Расчет-1">Расчет-1</option>
									<option value="Расчет-2">Расчет-2</option>
									<option value="Расчет-3">Расчет-3</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Сейчас бухгалтерию ведет</span>
       							<select class="form-select" name="add-employer-positions" data-placeholder=" ">
									<option></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Имя и фамилия</span>
       							<input type="text" class="input calc-form__input js-input" >
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Телефон</span>
       							<input type="tel" class="input calc-form__input js-input" >
       						</label>
       						<label class="calc-form__label js-label">
       							<span class="calc-form__label-title">Электронная почта</span>
       							<input type="email" class="input calc-form__input js-input" >
       						</label>
       						<div class="calc-form__bar">
       							<div class="calc-form__bar-btns">
									<button class="btn calc-form__back" @click="backPage">Назад</button>
									<button class="btn btn--green calc-form__submit">Отправить заявку</button>
       							</div>
       							<div class="calc-form__message">
       								Нажимая «Отправить заявку», вы принимаете <a href="#" target="_blank">условия передачи информации</a>
       							</div>       							
       						</div>
       					</form>
       				</div>
       			</div>
       		</section>

</template>

<script>
    export default {
        data() {
            return {
                currentPage: 1,

                yearbalance: '',
                dateur: '',
                orgform: '',
                needprice: false,
                summ: '5000000',
                region: '',
                type: '',
            }
        },
        props: {

        },
        mounted() {

        },
        methods: {
            nextPage(){
                console.log(123);
                this.currentPage++;
            },
            backPage(){
                this.currentPage--;
            }
        }
    }
</script>