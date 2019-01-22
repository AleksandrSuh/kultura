<div class="container">
<div itemprop="articleBody">
    <?$APPLICATION->IncludeFile(
        SITE_DIR."include/about_main.php",
        Array(),
        Array("MODE"=>"html", "NAME"=>"текст")
    );?>
    <hr>
    <p>&nbsp;</p>
    <!--table width="100%">
        <tbody>
        <tr-->
        <div class="row mx-0">

            <div class="landing-block-node-card col-md-6 col-lg-6 g-py-50" valign="top">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about_left_col.php",
                    Array(),
                    Array("MODE"=>"html", "NAME"=>"левую колонку")
                );?>
            </div>
            <div class="landing-block-node-card col-md-6 col-lg-6 g-py-50" valign="top">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/about_right_col.php",
                    Array(),
                    Array("MODE"=>"html", "NAME"=>"правую колонку")
                );?>
            </div>
        </div>
        <!--/tr>
        </tbody>
    </table-->
    </div>
</div>
</div>