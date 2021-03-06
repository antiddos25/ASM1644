<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/inline/ckeditor.js"></script>
    <title>Document</title>

</head>
<style>
.container-contact100 {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background: #e6e6e6;
}.wrap-contact100 {
    width: 920px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 62px 55px 90px 55px;
}.contact100-form-title {
    display: block;
    width: 100%;
    font-family: Montserrat-Black;
    font-size: 39px;
    font-weight: 900;
    color: #333333;
    line-height: 1.2;
    text-align: center;
    padding-bottom: 59px;
}
.wrap-input100 {
    width: 100%;
    position: relative;
    border: 1px solid #e6e6e6;
    border-radius: 13px;
    padding: 10px 30px 9px 22px;
    margin-bottom: 20px;
}
.contact100-form-btn {
    display: flex;
    cursor: pointer;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 50px;
    background-color: #333333;
    border-radius: 25px;
    font-family: Montserrat-Medium;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}
.contact100-form-btn:hover{
    background-color: #4d4f50;
}
.label-input100 {
    font-family: Montserrat-SemiBold;
    font-size: 15px;
    font-weight: 800;
    padding-left: 15px;
    color: #393939;
    line-height: 2;
    text-transform: uppercase;
}.input100 {
    display: block;
    width: 100%;
    background: transparent;
    font-family: Montserrat-SemiBold;
    font-size: 18px;
    border: none;
    color: #555555;
    line-height: 1.2;
    padding: 10px 20px 10px 10px;
}
</style>
<body>
<div class="container-contact100">
		<div class="wrap-contact100">
        @foreach($edit_product as $key => $data)	
        <form class="contact100-form validate-form" action="{{URL::to('/update_product/'.$data->id)}}" method="POST">
        {{csrf_field( )}}
				<span class="contact100-form-title">
					C???P NH???T S???N PH???M
				</span>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">M?? s???n ph???m</span>
					<input disabled class="input100" type="text" name="product_id" placeholder="Nh???p t??n s???n ph???m" value="{{$data->id}}">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">T??n s???n ph???m</span>
					<input class="input100" type="text" name="product_name" placeholder="Nh???p t??n s???n ph???m" value="{{$data->name}}">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100" style="padding: 10px 20px;">H??nh ???nh</span>
                    <div>
                    <img  src="{{ asset('image/'.$data->image) }}" style="width: 100px;height: 100px;border: 2px solid #18191a; padding: 10px;"></img>
                    </div>
                </div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Gi?? s???n ph???m</span>
					<input class="input100" type="text" name="product_price" placeholder="Nh???p gi?? s???n ph???m" value="{{$data->cost}}">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Danh m???c s???n ph???m</span>
					<div>
						<select style="margin-top: 30px;padding: 20px;" class="js-select2 select2-hidden-accessible" name="product_cate" tabindex="-1" aria-hidden="true">
							<option value="hot">S???n ph???m n???i b???t</option>
							<option value="normal">S???n ph???m kho</option>
							<option value="sale">S???n ph???m gi???m gi??</option>
						</select>
                        <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 188.4px;padding-right: 20px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-service-h6-container"><span class="select2-selection__rendered" id="select2-service-h6-container" title="Please chooses">Ch???n danh m???c</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
					<span class="label-input100">Mi??u t??? s???n ph???m</span>
                    <div id="editor" style="padding-bottom: 100px;">
					<textarea id="editor1" class="input100" name="product_decs" placeholder="Mi??u t??? s???n ph???m....">{{$data->decs}}</textarea>
                    </div>
                    <script>
                        InlineEditor
                            .create( document.querySelector( '#editor' ) )
                            
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </div>
                @endforeach
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						<span>
							C???p nh???t s???n ph???m
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>