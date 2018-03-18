<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Project to Orr projects</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
    </head>
    <body>
        <div>
            <a href='<?php echo site_url('') ?>'>หน้าหลัก</a> |
            <a href='<?php echo site_url('Project/my_sys') ?>'>โปรแกรม</a> |
            <a href='<?php echo site_url('Project/my_user') ?>'>ผู้ใช้งาน</a> |
            <a href='<?php echo site_url('Project/my_group') ?>'>กลุ่มผู้ใช้งาน</a> |
            <a href='<?php echo site_url('Project/my_can') ?>'>สิทธิ์การใช้งาน</a> | 
            <a href='<?php echo site_url('Project/my_datafield') ?>'>คำจำกัดความ ข้อมูล</a> |		 
            <a href='<?php echo site_url('Project/my_registration') ?>'>การลงทะเบียนใช้งาน</a> |
            <a href='<?php echo site_url('Project/my_menu') ?>'>เมนูโครงการ</a>
        </div>
        <div style='height:20px;'></div>  
        <div>
            <?php echo $output; ?>
        </div>
    </body>
</html>