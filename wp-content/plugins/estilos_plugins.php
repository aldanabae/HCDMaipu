<!- CSS Plugin SP-News and Widget - C:\xampp\htdocs\HCDMaipu\wp-content\plugins\sp-news-and-widget\css\stylenews.css -->

.news-col-3, .news-col-4, .news-col-2{-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
.news{margin-bottom:40px !important; clear:both;}
.news-col-1, .news-col-list{padding-bottom:40px; border-bottom:1px solid #d1d1d1;}
.news-col-list{padding-bottom:20px;}
.news .news-title{margin-top:0px !important; margin-bottom:10px !important;}

.news .news-title a{font-size:22px; line-height:26px; color:#1A408A; text-decoration:none !important;} /*Cambio color:#555; */

.news-cat{margin-bottom:10px ;}
.news-content{float:left; width:100%; clear:both;}
.date-post{width: 11%;float: left;text-align: center;}
.date-post span{display: block;color: #222;font-size: 30px;margin: 0px 0px 2px;padding-bottom: 2px;border-bottom: 1px dotted #C0C0C0;}
.date-post h2{margin-bottom:5px !important; padding-bottom:0 !important; margin-top:0px !important; text-align:center;}
.date-post p{margin: 0px;text-transform: uppercase;color: #333; text-align:center !important}
.post-content-text{width:87%; margin-left:2%; float:left;}
.news-thumb{float:left; width:100%; margin-bottom:25px;}

.grid-date-post, .grid-date-post a{font-size:13px; margin-bottom:5px;}
.widget-date-post, .widget-date-post a{font-size:13px; margin-top:5px; color:#BAC5DB;} /*Cambio color:#FFF;}*/

.news-col-4{width:25%; float:left; clear:none !important; padding:0 15px;}
.news-col-3{width:33%; float:left; clear:none !important; padding:0 15px;}
.news-col-2{width:50%; float:left; clear:none !important; padding:0 15px;}
.news-col-1, .news-col-list{width:100%; float:left;}

.grid-news-thumb{float: left; height: 200px;line-height: 0;  overflow: hidden;  position: relative;  width: 100%;background: #f1f1f1;  }
.grid-news-thumb img{height: 100% !important;width: 100% !important;object-fit: cover;object-position: top center;}  
  
.news-col-1 .grid-news-thumb{height:400px;}
.news-col-2 .grid-news-thumb{height: 250px;}

.news-col-list .news-thumb{float:left; width:33%;}
.news-col-list .news-content{float:left;  margin-left:2% ; width:65%; clear:none; }.no-thumb.blog-col-0 .blog-content{ margin-left:0 ; width:100%; }
.news-col-list .news-content .post-content-text{margin-left:0px;}  
  
/* widget */  
.news_li {clear: both !important; margin-bottom:8px !important; margin-top:8px !important; padding-bottom:10px !important; }
.news_li a.newspost-title, .widget .news_li a.newspost-title, #secondary .widget .news_li a.newspost-title{color:#5E79AD;} /*Cambio a.newspost-title{color:#428CBA;}*/
.news_li p{padding-bottom:0px !important}
.news-col-3 .news-thumb, .news-col-2 .news-thumb, .news-col-4 .news-thumb{margin-bottom:10px;}
.news-col-3 .post-content-text, .news-col-2 .post-content-text, .news-col-4 .post-content-text{width:100%; margin:0px;}
.news-short-content{margin-bottom:10px;}
.first.last {clear: both !important;}
.news.first{clear: both !important;}


.recent-news-items .news_li{padding:10px 0 !important; clear:both;}  
.news_li{border-bottom:1px solid #ddd; margin:0 !important; list-style:none !important}
.newstickerthumb .news_li{float:left; width:100%;}
.news_thumb_left{display:table-cell; vertical-align:top; width:100px;  }
.news_thumb_left a{display:block; margin-right:10px;}
.news_thumb_left img{height: 100% !important;width: 100% !important;object-fit: cover;object-position: top center; }
.news_thumb_right{display:table-cell; vertical-align:top; }
.news_pagination{clear:both; padding:20px 0;  float:left; width:100%;text-align: center;}
.news_pagination .button-news-p{width:48%; float:right; text-align:right; padding-right:15px;}
.news_pagination .button-news-n{width:48%; float:left; text-align:left; padding-left:15px;}
.news_pagination a, 
.news_pagination a{color: #fff !important;background: #333;padding: 7px 10px;display: inline-block;text-align: center;line-height: normal;box-shadow: none;text-shadow: none;font-size: 14px;text-transform: uppercase;border: 1px solid #333;text-decoration: none !important;}
.news_pagination a:hover, 
.news_pagination a:focus, 
.news_pagination a:hover, 
.news_pagination a:focus{color: #333 !important;background: transparent;}
.recent-news-items{clear:both;}
.recent-news-items.no_p h6{margin:5px 0 !important;}
.recent-news-items p{font-size:13px !important; margin-bottom:10px !important}

.news-col-1.has-no-date .post-content-text{margin-left:0px; width:100%;}
.news-more-link{padding:5px 15px; background:#5E79AD; color:#fff; display:inline-block; clear:both; text-decoration:none !important;} /*Cambio background:#555;*/
.news-more-link:hover{background:#BAC5DB; color:#555} /*Cambio .news-more-link:hover{background:#f1f1f1; color:#555}*/

.widget ul li.news_li::before{content:none !important}

@media all and (max-width: 768px) {
.news-col-3, .news-col-4{width:50%;}
.news.first{clear: none !important;}
}

@media all and (max-width: 640px) {
.news-col-3, .news-col-2, .news-col-4{width:100%;}

}

@media all and (max-width: 500px) {
	
	.news-col-list .news-thumb{float:left; width:100%;}	
	.news-col-list .news-content{float:left;  margin-left:0% ; width:100%; clear:both; }
	.news-col-1 .grid-news-thumb{height:250px}
	}
	
@media all and (max-width: 400px) {	
	.news-col-1 .grid-news-thumb{height:200px}
}