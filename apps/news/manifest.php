<?php defined('IN_WITY') or die('Access denied'); ?>
<?xml version="1.0" encoding="utf-8"?>
<app>
	<!-- Application name -->
	<name>News</name>
	
	<version>0.1</version>
	
	<!-- Last update date -->
	<date>27-02-2013</date>
	
	<!-- Tiny icone to be displayed in the admin board -->
	<icone></icone>
	
	<!-- Permissions -->
	<permission name="news_editor" />
	<permission name="global_editor" />
	<permission name="deletor" />
	
	<!-- Front pages -->
	<action default="default">listing</action>
	<action>detail</action>
	
	<!-- Admin pages -->
	<admin>
		<action desc="articles_listing" default="1">news_listing</action>
		<action desc="article_add" requires="news_editor">news_add_or_edit</action>
		<action desc="article_delete" menu="false" requires="news_editor,deletor">news_delete</action>
		<action desc="categories_management" requires="global_editor">categories_manager</action>
                <action desc="category_delete" menu="false" requires="global_editor,deletor">category_delete</action>
	</admin>
</app>