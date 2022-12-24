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
  background-color: #0069d9 !important;
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
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>
                            <?=$this->session->flashdata('message');?>
                            <form class="user" method="post" action="<?=base_url('login')?>">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address..." value="<?=set_value('email')?>">
                                        <?=form_error('email','<small class=" pl-6 validasi" >','</small>')?>
                                        
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" value="<?=set_value('password')?>">
                                        <?=form_error('password','<small class=" pl-6 validasi" >','</small>')?>


                                </div>
                                <button type="submit" class="btn btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?=base_url('registration')?>">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>



<div style="margin-bottom: 300px;"></div>
