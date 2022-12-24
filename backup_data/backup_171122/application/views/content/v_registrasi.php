<style>
    form.user .form-control-user {
        font-size: .8rem;
        border-radius: 3rem;
        padding: 1.5rem 1rem;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #6e707e;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #d1d3e2;
        border-radius: .35rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        background: none !important;
    }

    .card {
       word-wrap: break-word;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
            border-top-color: currentcolor;
            border-top-style: none;
            border-top-width: 0px;
        border-top: 1px solid rgba(0,0,0,.1);
    }

    hr {
        box-sizing: content-box;
height: 0;
overflow: visible;
    }

    form.user .btn-user {
  font-size: .8rem;
  border-radius: 4rem;
  padding: .75rem 1rem;
  background-color : #FF9F48 !important;
}

.btn-user:hover {
  color: #fff;
  background-color: #FFFF !important;
  border-color: #e38530 !important;
  opacity: 0.75;
}

small.validasi {
    display: inline-block;
color: #dc3545 !important;
padding: 3px 4px 2px 4px;
  padding-left: 4px;
font-size: 12px;
position: relative;
}

</style>
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="post" action="<?=base_url('registration')?>">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="first_name" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name" value="<?=set_value('first_name')?>">
                                    <?=form_error('first_name','<small class=" pl-6 validasi" >','</small>')?>
                                
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="last_name" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name" value="<?=set_value('last_name')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" value="<?=set_value('email')?>">
                                <?=form_error('email','<small class=" pl-6 validasi" >','</small>')?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user"
                                    id="exampleInputPassword" value="<?=set_value('password')?>" placeholder="Password">
                                <?=form_error('password','<small class=" pl-6 validasi" >','</small>')?>

                            </div>
                            <div class="col-sm-6">
                                <input type="password" name="password2" class="form-control form-control-user"
                                    id="exampleRepeatPassword" value="<?=set_value('password2')?>"  placeholder="Repeat Password">
                                <?=form_error('password2','<small class=" pl-6 validasi" >','</small>')?>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>

                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?=base_url('login')?>">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<div style="margin-bottom: 300px;"></div>
