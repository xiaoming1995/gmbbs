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