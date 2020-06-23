<?php $title = "Оформление заказа"; ?>

<?php include 'inc/header.php'; ?>

<form class="l_order">
    <div class="wrapper">
        <div class="l_card">
            <div class="l_card__left">
                <div class="l_card__slider">
                    <div class="l_card__image_wrp">
                        <img class="l_card__image" src="img/l_card__image.png" alt="">
                    </div>
                    <div class="l_card__image_wrp">
                        <img class="l_card__image" src="img/l_card__image.png" alt="">
                    </div>
                    <div class="l_card__image_wrp">
                        <img class="l_card__image" src="img/l_card__image.png" alt="">
                    </div>
                    <div class="l_card__image_wrp">
                        <img class="l_card__image" src="img/l_card__image.png" alt="">
                    </div>
                    <div class="l_card__image_wrp">
                        <img class="l_card__image" src="img/l_card__image.png" alt="">
                    </div>
                    <div class="l_card__image_wrp">
                        <img class="l_card__image" src="img/l_card__image.png" alt="">
                    </div>
                    <div class="l_card__image_wrp">
                        <img class="l_card__image" src="img/l_card__image.png" alt="">
                    </div>
                </div>
                <div class="l_gallery">
                    <div class="l_gallery__img active">
                        <img class="l_card__image" src="img/l_gallery__img.png" alt="">
                    </div>
                    <div class="l_gallery__img">
                        <img class="l_card__image" src="img/l_gallery__img.png" alt="">
                    </div>
                    <div class="l_gallery__img">
                        <img class="l_card__image" src="img/l_gallery__img.png" alt="">
                    </div>
                    <div class="l_gallery__img">
                        <img class="l_card__image" src="img/l_gallery__img.png" alt="">
                    </div>
                    <div class="l_gallery__img">
                        <img class="l_card__image" src="img/l_gallery__img.png" alt="">
                    </div>
                    <div class="l_gallery__img">
                        <img class="l_card__image" src="img/l_gallery__img.png" alt="">
                    </div>
                    <div class="l_gallery__img">
                        <img class="l_card__image" src="img/l_gallery__img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="l_card__right">
                <div class="l_card__block">
                    <h1 class="l_card__h1">
                        <span data-id="1" class="l_step__ttle active">
                            <span class="l_card__white">Select your</span><br />
                            ALPHA PRO COMBO
                        </span>
                        <span data-id="2" class="l_step__ttle">
                            <span class="l_card__white">Select your</span><br />
                            COLOR AND SIZE
                        </span>
                        <span data-id="3" class="l_step__ttle">
                            <span class="l_card__white">Preorder</span>
                            ALPHA PRO
                        </span>
                    </h1>
                    <div class="l_desc">
                        <div class="l_desc__row">
                            <div class="l_desc__text">Total:</div>
                            <div class="l_desc__price">£350</div>
                            <div class="info info-l_desc"></div>
                        </div>
                        <div class="l_desc__row">
                            <div class="l_desc__text">Due today:</div>
                            <div class="l_desc__price">£85</div>
                        </div>
                        <div class="l_desc__row">
                            <div class="l_desc__text">
                                <span>Shipping cost will be calculated  at the checkout:</span>
                                <span>Shipping:</span>
                            </div>
                            <div class="l_desc__price">-</div>
                        </div>
                    </div>
                </div>
                <div class="l_steps">
                    <div data-id="1" class="l_step active">
                        <div class="l_step__top l_step__top-title">
                            <div class="l_step__title">Choose helmet type & Add-ons:</div>
                            <div class="l_step__steps"><span>Step 1</span> of 3</div>
                        </div>
                        <div class="l_type">
                            <div class="l_type__el">
                                <input id="type_1" value="type_1" name="type" type="radio">
                                <label class="l_type__label" for="type_1">
                                    <span class="l_type__image">
                                        <img src="img/l_type__image-1.png" alt="">
                                    </span>
                                    <span class="l_type__bot">
                                        <span class="l_type__check"></span>
                                        <span class="l_type__right">
                                            <span class="l_type__title">Street / Sport</span>
                                            <span class="l_type__price">£279.99</span>
                                        </span> 
                                    </span>
                                </label>
                                <span class="info info-l_type"></span>
                            </div>
                            <div class="l_type__el">
                                <input id="type_2" value="type_2" name="type" type="radio" checked>
                                <label class="l_type__label" for="type_2">
                                    <span class="l_type__image">
                                        <img src="img/l_type__image-2.png" alt="">
                                    </span>
                                    <span class="l_type__bot">
                                        <span class="l_type__check"></span>
                                        <span class="l_type__right">
                                            <span class="l_type__title">Motocross</span>
                                            <span class="l_type__price">£310</span>
                                        </span> 
                                    </span>
                                </label>
                                <span class="info info-l_type"></span>
                            </div>
                            <div class="l_type__el">
                                <input id="type_3" value="type_3" name="type" type="radio">
                                <label class="l_type__label" for="type_3">
                                    <span class="l_type__image">
                                        <img src="img/l_type__image-3.png" alt="">
                                    </span>
                                    <span class="l_type__bot">
                                        <span class="l_type__check"></span>
                                        <span class="l_type__right">
                                            <span class="l_type__title">Jet / Cruiser</span>
                                            <span class="l_type__price">£178</span>
                                        </span> 
                                    </span>
                                </label>
                                <span class="info info-l_type"></span>
                            </div>
                            <div class="l_type__el">
                                <input id="type_4" value="type_4" name="type" type="radio">
                                <label class="l_type__label" for="type_4">
                                    <span class="l_type__image">
                                        <img src="img/l_type__image-4.png" alt="">
                                    </span>
                                    <span class="l_type__bot">
                                        <span class="l_type__check"></span>
                                        <span class="l_type__right">
                                            <span class="l_type__title">Ultra Combo</span>
                                            <span class="l_type__price">£378</span>
                                        </span> 
                                    </span>
                                </label>
                                <span class="info info-l_type"></span>
                            </div>
                        </div>
                        <div class="l_dop">
                            <div class="l_dop__el">
                                <input id="dop_1" value="dop_1" name="dop_1" type="checkbox" checked>
                                <label class="l_dop__label" for="dop_1">
                                    <span style="background-image: url(img/l_dop__image-1.png);" class="l_dop__image"></span>
                                    <span class="l_dop__content">
                                        <span class="l_dop__check"></span>
                                        <span class="l_dop__text">Aero Wing Adjustable Spoiler</span>
                                        <span class="l_dop__price">(+ £75)</span>
                                        <span class="info info-l_dop"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="l_dop__el">
                                <input id="dop_2" value="dop_2" name="dop_2" type="checkbox">
                                <label class="l_dop__label" for="dop_2">
                                    <span style="background-image: url(img/l_dop__image-2.png);" class="l_dop__image"></span>
                                    <span class="l_dop__content">
                                        <span class="l_dop__check"></span>
                                        <span class="l_dop__text">Emergency brake light</span>
                                        <span class="l_dop__price">(+ £88)</span>
                                        <span class="info info-l_dop"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="l_dop__el">
                                <input id="dop_3" value="dop_3" name="dop_3" type="checkbox">
                                <label class="l_dop__label" for="dop_3">
                                    <span style="background-image: url(img/l_dop__image-3.png);" class="l_dop__image"></span>
                                    <span class="l_dop__content">
                                        <span class="l_dop__check"></span>
                                        <span class="l_dop__text">Removable Respo Mask</span>
                                        <span class="l_dop__price">(+ £93)</span>
                                        <span class="info info-l_dop"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="l_dop__el">
                                <input id="dop_4" value="dop_4" name="dop_4" type="checkbox">
                                <label class="l_dop__label" for="dop_4">
                                    <span style="background-image: url(img/l_dop__image-4.png);" class="l_dop__image"></span>
                                    <span class="l_dop__content">
                                        <span class="l_dop__check"></span>
                                        <span class="l_dop__text">3-in-one: spoiler, light and mask</span>
                                        <span class="l_dop__price">(+ £257)</span>
                                        <span class="info info-l_dop"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="l_dop__el">
                                <input id="dop_5" value="dop_5" name="dop_5" type="checkbox">
                                <label class="l_dop__label" for="dop_5">
                                    <span style="background-image: url(img/l_dop__image-5.png);" class="l_dop__image"></span>
                                    <span class="l_dop__content">
                                        <span class="l_dop__check"></span>
                                        <span class="l_dop__text">Full face visor</span>
                                        <span class="l_dop__price">(+ £257)</span>
                                        <span class="info info-l_dop"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="l_buttons">
                            <div class="l_button">BACK</div>
                            <div class="l_button active go_to_2">Next</div>
                        </div>
                    </div>
                    <div data-id="2" class="l_step">
                        <div class="l_step__top">
                            <div class="l_step__title">Helmet color: <div class="info info-title"></div></div>
                            <div class="l_step__steps"><span>Step 2</span> of 3</div>
                        </div>
                        <div class="l_color">
                            <div class="l_color__el">
                                <input id="h_color_1" value="h_color_1" name="h_color" type="radio" checked>
                                <label class="l_color__label" for="h_color_1">
                                    <span style="background-image: url(img/gBlack.png);" class="l_color__check"></span>
                                    <span class="l_color__text">Stealthy Black</span>
                                </label>
                            </div>
                            <div class="l_color__el">
                                <input id="h_color_2" value="h_color_2" name="h_color" type="radio">
                                <label class="l_color__label" for="h_color_2">
                                    <span style="background: black;" class="l_color__check"></span>
                                    <span class="l_color__text">Gloss Black</span>
                                </label>
                            </div>
                        </div>

                        <div class="l_step__top">
                            <div class="l_step__title">Visor color: <div class="info info-title"></div></div>
                        </div>
                        <div class="l_color">
                            <div class="l_color__el">
                                <input id="v_color_1" value="v_color_1" name="v_color" type="radio" checked>
                                <label class="l_color__label" for="v_color_1">
                                    <span style="background: black;" class="l_color__check"></span>
                                    <span class="l_color__text">Mean Tinted</span>
                                </label>
                            </div>
                            <div class="l_color__el">
                                <input id="v_color_2" value="v_color_2" name="v_color" type="radio">
                                <label class="l_color__label" for="v_color_2">
                                    <span style="background: #838c91;" class="l_color__check"></span>
                                    <span class="l_color__text">Clear</span>
                                </label>
                            </div>
                            <div class="l_color__el">
                                <input id="v_color_3" value="v_color_3" name="v_color" type="radio">
                                <label class="l_color__label" for="v_color_3">
                                    <span style="background-image: url(img/irirdium.png);"class="l_color__check"></span>
                                    <span class="l_color__text">Iridium</span>
                                </label>
                            </div>
                            <div class="l_color__el">
                                <input id="v_color_4" value="v_color_4" name="v_color" type="radio">
                                <label class="l_color__label" for="v_color_4">
                                    <span style="background: #eb3325;" class="l_color__check"></span>
                                    <span class="l_color__text">Red</span>
                                </label>
                            </div>
                            <div class="l_color__el">
                                <input id="v_color_5" value="v_color_5" name="v_color" type="radio">
                                <label class="l_color__label" for="v_color_5">
                                    <span style="background-image: url(img/chrome.png);" class="l_color__check"></span>
                                    <span class="l_color__text">Chrome</span>
                                </label>
                            </div>
                        </div>

                        <div class="l_step__top">
                            <div class="l_step__title l_step__title-link">Helmet size: <div class="l_step__link">How to choose correct size</div></div>
                        </div>
                        <div class="l_size">
                            <div class="l_size__el">
                                <input id="size_1" value="size_1" name="size" type="radio" checked>
                                <label class="l_size__label" for="size_1">
                                    <span class="l_size__check"></span>
                                    <span class="l_size__size">XS</span>
                                    <span class="l_size__text">53 - 54 cm</span>
                                </label>
                            </div>
                            <div class="l_size__el">
                                <input id="size_2" value="size_2" name="size" type="radio">
                                <label class="l_size__label" for="size_2">
                                    <span class="l_size__check"></span>
                                    <span class="l_size__size">S</span>
                                    <span class="l_size__text">55 - 56 cm</span>
                                </label>
                            </div>
                            <div class="l_size__el">
                                <input id="size_3" value="size_3" name="size" type="radio">
                                <label class="l_size__label" for="size_3">
                                    <span class="l_size__check"></span>
                                    <span class="l_size__size">M</span>
                                    <span class="l_size__text">57 - 58 cm</span>
                                </label>
                            </div>
                            <div class="l_size__el">
                                <input id="size_4" value="size_4" name="size" type="radio">
                                <label class="l_size__label" for="size_4">
                                    <span class="l_size__check"></span>
                                    <span class="l_size__size">L</span>
                                    <span class="l_size__text">59 - 60 cm</span>
                                </label>
                            </div>
                            <div class="l_size__el">
                                <input id="size_5" value="size_5" name="size" type="radio">
                                <label class="l_size__label" for="size_5">
                                    <span class="l_size__check"></span>
                                    <span class="l_size__size">XL</span>
                                    <span class="l_size__text">61- 62 cm</span>
                                </label>
                            </div>
                            <div class="l_size__el">
                                <input id="size_6" value="size_6" name="size" type="radio">
                                <label class="l_size__label" for="size_6">
                                    <span class="l_size__check"></span>
                                    <span class="l_size__size">XXL</span>
                                    <span class="l_size__text">63- 64 cm</span>
                                </label>
                            </div>
                        </div>

                        <div class="l_buttons">
                            <div class="l_button go_to_1">BACK</div>
                            <div class="l_button active go_to_3">Next</div>
                        </div>
                    </div>
                    <div data-id="3" class="l_step l_step-third">
                        <div class="l_when">
                            <div class="l_when__el">
                                <input id="when_1" value="when_1" name="when" type="radio" checked>
                                <label class="l_when__label" for="when_1">
                                    <span class="l_when__check"></span>
                                    <span class="l_when__text">Pay Today  £85</span>
                                </label>
                            </div>
                            <div class="l_when__el">
                                <input id="when_2" value="when_2" name="when" type="radio">
                                <label class="l_when__label" for="when_2">
                                    <span class="l_when__check"></span>
                                    <span class="l_when__text">Pay full ammount 
                                        to receive 
                                        15% Discount <span>*</span>
                                    </span>
                                </label>
                                <div class="l_when__help">* (this offer available only for the first 500 orders)</div>
                            </div>
                        </div>
                        <input class="input" name="promocode" placeholder="Enter promocode:" type="text">
                        <div class="l_step__top l_step__top-title l_step__top-third">
                            <div class="l_step__title">Select your size:</div>
                            <div class="l_step__steps"><span>Step 3</span> of 3</div>
                        </div>
                        <div class="l_step__name">Pay by:</div>
                        <div class="l_pay">
                            <div class="l_pay__el">
                                <input id="pay_type_1" value="pay_type_1" name="pay_type" type="radio" checked>
                                <label class="l_pay__label" for="pay_type_1">
                                    <span class="l_pay__check"></span>
                                    <span class="l_pay__text">Credit Card</span>
                                </label>
                            </div>
                            <div class="l_pay__el">
                                <input id="pay_type_2" value="pay_type_2" name="pay_type" type="radio">
                                <label class="l_pay__label" for="pay_type_2">
                                    <span class="l_pay__check"></span>
                                    <span class="l_pay__text">PayPal</span>
                                </label>
                            </div>
                            <div class="l_pay__el">
                                <input id="pay_type_3" value="pay_type_3" name="pay_type" type="radio">
                                <label class="l_pay__label" for="pay_type_3">
                                    <span class="l_pay__check"></span>
                                    <span class="l_pay__text">Google Checkout</span>
                                </label>
                            </div>
                        </div>
                        <div class="l_step__name">Payment:</div>
                        <div class="inputs">
                            <input class="input" name="card" placeholder="Credit card number *" type="text">
                            <input class="input" name="date" placeholder="Expiration Date  ( MM / YY ) *" type="text">
                        </div>
                        <div class="inputs">
                            <input class="input" name="code" placeholder="CVV *" type="text">
                            <input class="input" name="zip" placeholder="Billing zip code *" type="text">
                        </div>
                        <div class="l_step__name">Billing address:</div>
                        <div class="inputs">
                            <input class="input" name="street" placeholder="Street address *" type="text">
                            <input class="input" name="city" placeholder="City *" type="text">
                        </div>
                        <div class="inputs">
                            <input class="input" name="state" placeholder="State/province " type="text">
                            <input class="input" name="zip-code" placeholder="ZIP/postal code " type="text">
                        </div>
                        <div class="inputs">
                            <select name="b_country" data-placeholder="Country *" class="input select2">
                                <option value="">&nbsp;</option>
                                <option value="Country 1">Country 1</option>
                                <option value="Country 2">Country 2</option>
                                <option value="Country 3">Country 3</option>
                            </select>
                            <input class="input" name="phone-number" placeholder="Phone number *" type="text">
                        </div>

                        <div class="l_ord">
                            <input id="same" value="same" name="same" type="checkbox">
                            <label class="l_ord__label" for="same">
                                <span class="l_ord__check"></span>
                                <span class="l_ord__text">My shipping address is the same</span>
                            </label>
                        </div>
                        
                        <div class="l_shipping active">
                            <div class="l_step__name">Shipping address:</div>
                            <div class="inputs">
                                <input class="input" name="s_street" placeholder="Street address *" type="text">
                                <input class="input" name="s_city" placeholder="City *" type="text">
                            </div>
                            <div class="inputs">
                                <input class="input" name="s_state" placeholder="State/province " type="text">
                                <input class="input" name="s_zip-code" placeholder="ZIP/postal code " type="text">
                            </div>
                            <div class="inputs">
                                <select name="s_b_country" data-placeholder="Country *" class="input select2">
                                    <option value="">&nbsp;</option>
                                    <option value="Country 1">Country 1</option>
                                    <option value="Country 2">Country 2</option>
                                    <option value="Country 3">Country 3</option>
                                </select>
                                <input class="input" name="s_phone-number" placeholder="Phone number *" type="text">
                            </div>
                        </div>

                        <div class="l_ord">
                            <input id="order" value="order" name="order" type="checkbox">
                            <label class="l_ord__label" for="order">
                                <span class="l_ord__check"></span>
                                <span class="l_ord__text">Create account to track / modify order</span>
                            </label>
                        </div>

                        <div class="l_account">
                            <div class="l_step__name">Account:</div>
                            <div class="inputs">
                                <input class="input" name="name" placeholder="Name *" type="text">
                                <input class="input" name="surname" placeholder="Surname" type="text">
                            </div>
                            <div class="inputs">
                                <input class="input" name="phone" placeholder="Phone number *" type="text">
                                <input class="input" name="country" placeholder="Country *" type="text">
                            </div>
                            <input class="input" name="email" placeholder="Email address *" type="email">
                            <div class="inputs">
                                <input class="input" name="pass" placeholder="Create password *" type="password">
                                <input class="input" name="pass2" placeholder="Repeat password *" type="password">
                            </div>
                        </div>

                        <div class="l_ord">
                            <input id="agree" value="agree" name="agree" type="checkbox" checked>
                            <label class="l_ord__label" for="agree">
                                <span class="l_ord__check"></span>
                                <span class="l_ord__text">I agree to the processing of personal data</span>
                            </label>
                        </div>

                        <div class="l_buttons l_buttons-third">
                            <div class="l_button go_to_2">BACK</div>
                            <div class="l_button active">CHECKOUT</div>
                        </div>

                        <div class="l_step__seo">
                            <p>By clicking "Place Order" I agree to the <a href="#">Alpha Pro Pre-Order Agreement</a>, <a href="#">Supercharger Fair Use Policy</a>, the <a href="#">Customer Privacy</a> and consent to be contacted at the number provided with more information or offers about Matrix products. I understa these calls or texts may use automated dialing or pre-recorded messages. I understand my consent to be contacted is not a condition of purchase.</p>
                            <p><span>*</span> Filtered Fully refundable. You will be able to modify or add to your helmet spec ( visor colours and addons ) before orders are shipped in first quarter 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
     
<?php include 'inc/footer.php'; ?>