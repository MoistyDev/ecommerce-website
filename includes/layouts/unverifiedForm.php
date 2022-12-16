<div class="container">
    <div class="content">
        <form data-form-element="form-inline" method="post">
            <div class="personal-info">
                <div class="row align-items-center">
                    <h1>Personal Info</h1>
                </div>
                <div class="row align-items-center">
                    <h5 class="subtitle">Login Info</h5>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">First name</span>
                            <input data-field-type="first-name" type="text" class="form-control name" name="firstname" placeholder="First name" pattern="[A-Za-z]+" value="<?=$firstname?>">
                            <div class="field-verification error"> * <?=$firstnameError?></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Last name</span>
                            <input data-field-type="last-name" type="text" class="form-control name" name="lastname" placeholder="Last name" pattern="[A-Za-z]+" value="<?=$lastname?>">
                            <div class="field-verification error"> * <?=$lastnameError?></div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Email Address</span>
                            <input data-field-type="email" type="email" class="form-control email" name="email" id="" placeholder="example@email.com" value="<?=$email?>">
                            <div class="field-verification error"> * <?=$emailError?></div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <h5 class="subtitle">Shipping & Billing info</h5>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Address</span>
                            <input data-field-type="address" type="text" name="address" class="form-control address" value="<?=$address?>">
                            <div class="field-verification error"> * <?=$addressError?></div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">City</span>
                            <input data-field-type="city" type="text" name="city" class="form-control city" value="<?=$city?>">
                            <div class="field-verification error"> * <?=$cityError?></div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Country</span>
                            <input data-field-type="country" type="text" name="country" class="form-control country" value="<?=$country?>">
                            <div class="field-verification error"> * <?=$countryError?></div>
                        </div>
                    </div>
                    
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Postal Code</span>
                            <input data-field-type="postal-code" type="text" name="postalcode" class="form-control postal-code" pattern="\d{5}(?:-\d{4})?|[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d" value="<?=$postalCode?>">
                            <div class="field-verification error"> * <?=$postalCodeError?></div>
                            <input data-page-element="cart" data-cart-total="" type="hidden" name="cart" value="">
                            <input data-page-element="cartTotal" data-cart-total="" type="hidden" name="cartTotal" value="">
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="row align-items-center">
                <button data-button-type="submit" class="btn submit confirm-form" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>