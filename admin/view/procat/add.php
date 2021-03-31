        <!--main content start-->
        
        <section id="main-content">
            <section class="wrapper">
            


            <h1 class="pageLables">افزودن دستهبندی جدید محصولات</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                 افزودن دسته بندی جدید
            </header>
            <div class="panel-body">
                <form role="form" method="post" class="form-horizontal tasi-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input type="text" name="frm[title]" class="form-control input-lg m-bot15" placeholder="عنوان دسته را وارد کنید">
                    </div>
                    
                    <br>
                    
                    <select name="frm[chid]" class="form-control input-lg m-bot15">
                        <option value="0">سرگروه</option>   
                        <?php foreach($res as $j):?>
                        <option value="<?php echo $j['id'] ?>"><?php echo $j['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                
                   
    
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>



        	</section>
        <!--main content end-->
    	</section>