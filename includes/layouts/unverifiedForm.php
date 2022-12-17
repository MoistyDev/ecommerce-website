<div class="content">
    <form class="order-form" data-form-element="form-inline" method="post">
        <div class="personal-info">
            <div class="title row text-center">
                <h1>Order Form</h1>
            </div>
            <div class="col">
                <h5 class="subtitle text-center">Login Info</h5>
                <div class="row d-flex justify-content-center">
                    <div class="input-group">
                        <span class="input-group-text">First name</span>
                        <input data-field-type="first-name" type="text" class="form-control name" name="firstname" placeholder="First name" pattern="[A-Za-z]+" value="<?=$firstname?>">
                    </div>
                    <div class="field-verification text-center error"><?=$firstnameError?></div>
                </div>
                <div class="row d-flex justify-content-center">
                <div class="input-group">
                    <span class="input-group-text">Last name</span>
                    <input data-field-type="last-name" type="text" class="form-control name" name="lastname" placeholder="Last name" pattern="[A-Za-z]+" value="<?=$lastname?>">
                </div>
                <div class="field-verification text-center error"><?=$lastnameError?></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="input-group">
                        <span class="input-group-text" id="">Email Address</span>
                        <input data-field-type="email" type="email" class="form-control email" name="email" id="" placeholder="example@email.com" value="<?=$email?>">
                    </div>
                    <div class="field-verification text-center error"><?=$emailError?></div>
                </div>
                <h5 class="subtitle text-center">Shipping & Billing info</h5>
                <div class="row d-flex justify-content-center">
                <div class="input-group">
                    <span class="input-group-text">Address</span>
                    <input data-field-type="address" type="text" name="address" class="form-control address" value="<?=$address?>">
                    </div>
                    <div class="field-verification text-center error"><?=$addressError?></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="input-group">
                        <span class="input-group-text" id="">City</span>
                        <input data-field-type="city" type="text" name="city" class="form-control city" value="<?=$city?>">
                    </div>
                    <div class="field-verification text-center error"><?=$cityError?></div>
                    </div>
                <div class="row d-flex justify-content-center">
                    <div class="input-group">
                        <span class="input-group-text" id="">Country</span>
                        <input data-field-type="country" type="text" name="country" class="form-control country" value="<?=$country?>">
                    </div>
                    <div class="field-verification text-center error"><?=$countryError?></div>
                </div>
                
                <div class="row d-flex justify-content-center">
                    <div class="input-group">
                        <span class="input-group-text" id="">Postal Code</span>
                        <input data-field-type="postal-code" type="text" name="postalcode" class="form-control postal-code" pattern="\d{5}(?:-\d{4})?|[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d" value="<?=$postalCode?>">
                    </div>
                    <div class="field-verification text-center error"><?=$postalCodeError?></div>
                    <input data-page-element="cart" data-cart-total="" type="hidden" name="cart" value="">
                    <input data-page-element="cartTotal" data-cart-total="" type="hidden" name="cartTotal" value="">
                </div>
            </div>
        </div>  
        <div class="row d-flex justify-content-center">
            <button data-button-type="submit" class="submit confirm-form" type="submit" name="submit">Submit</button>
        </div>
    </form>
    <?php require_once "includes/layouts/shared/footerbar.php"; ?>
</div>