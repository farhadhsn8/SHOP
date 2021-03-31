        <!--main content start-->
        <?php $count = 0 ;?>
        <section id="main-content">
            <section class="wrapper">
            <table class="table table-striped border-top" id="sample_1">
                                 <thead>
                                    <tr>
                                        <th style="width: 8px;">ردیف</th>
                                        <th>عنوان</th>
                                        <th>دسته بندی</th>
                                        <th>قیمت</th>
                                        <th>تعداد</th>
                                        <th>1تصویر</th>
                                        <th>2تصویر</th>
                                        <th>3تصویر</th>
                                        <th class="hidden-phone"></th>
                                        <th class="hidden-phone"></th>
                                        <th class="hidden-phone"></th>
                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php  foreach($pro as $i): ?>
                                      <tr class="odd gradeX">
                                          <td><?php echo ++$count;?></td>
                                          <td><?php echo $i['title'];?></td>
                                          <td><?php echo $i['cat_id'];?></td>
                                          <td><?php echo $i['price'];?></td>
                                          <td><?php echo $i['count'];?></td>
                                          <td><img height="40px" width="50px" src="<?php echo $i['image1'];?>" alt="تصویر اول"></td>
                                          <td><img height="40px" width="50px" src="<?php echo $i['image2'];?>" alt="تصویر دوم "></td>
                                          <td><img height="40px" width="50px" src="<?php echo $i['image3'];?>" alt="تصویر سوم"></td>
                                        
                                        <td class="hidden-phone"><a href="index.php?c=pro&a=show&id=<?php echo $i['id'];?>" class="label label-success">نمایش</a></td>
                                        <td class="hidden-phone"><a href="index.php?c=pro&a=edit&id=<?php echo $i['id'];?>" class="label label-primary">ویرایش</a></td>
                                        <td class="hidden-phone"><a href="index.php?c=pro&a=list&del=1&id=<?php echo $i['id'];?>" class="label label-danger">حذف</a></td>
                                      </tr>
                                      <?php endforeach;?>
                                </tbody>
                            </table>







        	</section>
        <!--main content end-->
    	</section>