<div class="container">
    <div class="content">
        <form data-form-element="form-inline" method="post" action="orderConfirmed.php?orderID=<?=$orderId?>">
            <div class="personal-info">
                <div class="row align-items-center">
                    <h1>Personal Info</h1>
                </div>
                <div class="row align-items-center">
                    <h5 class="subtitle">Login Info</h5>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">First name</span>
                            <input data-field-type="first-name" type="text" class="form-control name" name="firstname" placeholder="First name" pattern="[A-Za-z]+" value="<?=$firstname?>" disabled>
                            <div class="field-verification verified"> * Verified</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Last name</span>
                            <input data-field-type="last-name" type="text" class="form-control name" name="lastname" placeholder="Last name" pattern="[A-Za-z]+" value="<?=$lastname?>" disabled>
                            <div class="field-verification verified"> * Verified</div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Email Address</span>
                            <input data-field-type="email" type="email" class="form-control email" name="email" id="" placeholder="example@email.com" value="<?=$email?>" disabled>
                            <div class="field-verification verified"> * Verified</div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <h5 class="subtitle">Shipping & Billing info</h5>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text">Address</span>
                            <input data-field-type="address" type="text" name="address" class="form-control address" value="<?=$address?>" disabled>
                            <div class="field-verification verified"> * Verified</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">City</span>
                            <input data-field-type="city" type="text" name="city" class="form-control city" value="<?=$city?>" disabled>
                            <div class="field-verification verified"> * Verified</div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Country</span>
                            <input data-field-type="country" type="text" name="country" class="form-control country" value="<?=$country?>" disabled>
                            <div class="field-verification verified"> * Verified</div>
                        </div>
                    </div>
                    
                    <div class="col-auto">
                        <div class="input-group">
                            <span class="input-group-text" id="">Postal Code</span>
                            <input data-field-type="postal-code" type="text" name="postalcode" class="form-control postal-code" pattern="\d{5}(?:-\d{4})?|[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d" value="<?=$postalCode?>" disabled>
                            <div class="field-verification verified"> * Verified</div>
                            <input data-page-element="cart" type="hidden" name="cart" value="">
                            <input data-page-element="cart" data-cart-total="" type="hidden" name="cartTotal" value="">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row align-items-center">
                <button data-button-type="submit" class="btn submit confirm-order" type="submit" name="submit">Confirm Order</button>
            </div>
        </form>
    </div>
</div>