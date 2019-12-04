<?php


//转化路由字符串为class样式名称
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

//导航栏选中判断
function category_nav_active($category_id)
{
	return active_class(if_route('categories.show') && if_route_param('category',$category_id));
}


//通过截取内容生成SEO  简介
/*
	strip_tags() 函数剥去字符串中的 HTML、XML 以及 PHP 的标签。
	mb_strwidth — 返回字符串的宽度
	Str::limit 限制内容宽度
 */
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return Str::limit($excerpt, $length);
}