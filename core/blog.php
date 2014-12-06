<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Razin
 * Date: 2/3/12
 * Time: 5:03 PM
 * To change this template use File | Settings | File Templates.
 */
    $display = '
        <div id="blogs">
        <ul>';
    $blog_array = $dbase->fetch_last_few_blog();
    foreach($blog_array as $blog){
        $display.='<li>';
        $display .= '<a href="detail_blog.php?bid='. $blog['id'] .'" >';
        $display.= '<div class="blog" >
                    <div class="blog_head" >
                        <img class="blog_bullet" src="../resource/images/default_prof_pic.png" width="40px" height="40px" />
                        <div class="blog_sub" >
                            <h2>';
        $display.= htmlentities(trim($blog["headline"]));

        $display.= '</h2>
                            <p>';
        $display.= htmlentities(trim($blog["username"]));
        $display.= '</p>
                        </div>

                    </div>
                    <div class="blog_text" >';
		//$blog["body"] = ereg_replace("/\n\r|\r\n/", " ", $blog["body"]);
		$blog["body"] = str_replace("\r\n", " ", $blog["body"]);
        $display.= substr(htmlentities(trim($blog["body"])), 0,80);
		$display.= " ";
		$display.= substr(htmlentities(trim($blog["body"])), 81,170);
        if(isset($blog['body'][171])){$display .= '.....';}
        $display.= '</div>
                </div></a>
            </li>';
        }

        $display.='</ul>
            </div>';
        echo $display;