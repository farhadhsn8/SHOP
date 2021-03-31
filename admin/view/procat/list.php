        <!--main content start-->
        <?php $count = 0 ;?>
        <section id="main-content">
            <section class="wrapper">
            <table class="table table-striped border-top" id="sample_1">
                                 <thead>
                                    <tr>
                                        <th style="width: 8px;">ردیف</th>
                                        <th>عنوان</th>
                                        <th class="hidden-phone"></th>
                                        <th class="hidden-phone"></th>
                                        <th class="hidden-phone"></th>
                                    </tr>
                                </thead>
                                  <tbody>
                                    <?php  foreach($procat as $i): ?>
                                      <tr class="odd gradeX">
                                          <td><?php echo ++$count;?></td>
                                          <td><?php echo $i['title'];?></td>
                                        
                                        <td class="hidden-phone"><a href="index.php?c=procat&a=show&id=<?php echo $i['id'];?>" class="label label-success">نمایش</a></td>
                                        <td class="hidden-phone"><a href="index.php?c=procat&a=edit&id=<?php echo $i['id'];?>" class="label label-primary">ویرایش</a></td>
                                        <td class="hidden-phone"><a href="index.php?c=procat&a=list&del=1&id=<?php echo $i['id'];?>" class="label label-danger">حذف</a></td>
                                      </tr>
                                      <?php endforeach;?>
                                </tbody>
                            </table>







        	</section>
        <!--main content end-->
    	</section>