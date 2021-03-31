        <!--main content start-->
        
        <section id="main-content">
            <section class="wrapper">
            


            <h1 class="pageLables">افزودن محصول جدید </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                 افزودن   
            </header>
            <div class="panel-body">
                <form role="form" method="post" class="form-horizontal tasi-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان  </label>
                        <input type="text" name="frm[title]" class="form-control input-lg m-bot15" placeholder="عنوان  را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات  </label>
                        <textarea name="frm[text]" id="" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">1تصویر  </label>
                        <input type="file" name="image1" class="form-control input-lg m-bot15" placeholder="عنوان  را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">2تصویر  </label>
                        <input type="file" name="image2" class="form-control input-lg m-bot15" placeholder="عنوان  را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">3تصویر  </label>
                        <input type="file" name="image3" class="form-control input-lg m-bot15" placeholder="عنوان  را وارد کنید">
                    </div>
                    
                    <br>
                    
                    <select name="frm[cat_id]" class="form-control input-lg m-bot15">
                        <option value="0">دسته بندی</option>   
                        <?php foreach($res as $j):?>
                        <option value="<?php echo $j['id'] ?>"><?php echo $j['title'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <div class="form-group">
                        <label for="exampleInputEmail1">تعداد موجودی  </label>
                        <input type="text" name="frm[count]" class="form-control input-lg m-bot15" placeholder="تعداد موجودی  را وارد کنید">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">قیمت   </label>
                        <input type="text" name="frm[price]" class="form-control input-lg m-bot15" placeholder="قیمت   را وارد کنید">
                    </div>
                
                   
    
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>



        	</section>
        <!--main content end-->
    	</section>