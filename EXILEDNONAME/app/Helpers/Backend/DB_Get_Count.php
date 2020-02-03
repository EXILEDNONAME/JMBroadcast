<?php
use App\Models\Backend\Broadcast\Slide1;
use App\Models\Backend\Broadcast\Slide2;
use App\Models\Backend\Broadcast\Video1;
use App\Models\Backend\Broadcast\Video2;
use App\Models\Backend\Broadcast\Video3;
use App\Models\Backend\Broadcast\Video4;
use App\Models\Backend\Broadcast\Content;

// COUNT NORMAL
function broadcast_slide1s_get_countnormal() { return count(Slide1::all()); }
function broadcast_slide2s_get_countnormal() { return count(Slide2::all()); }
function broadcast_video1s_get_countnormal() { return count(Video1::all()); }
function broadcast_video2s_get_countnormal() { return count(Video2::all()); }
function broadcast_video3s_get_countnormal() { return count(Video3::all()); }
function broadcast_video4s_get_countnormal() { return count(Video4::all()); }
function broadcast_contents_get_countnormal() { return count(Content::all()); }

// COUNT + 1
function broadcast_slide1s_get_count() { return count(Slide1::all())+1; }
function broadcast_slide2s_get_count() { return count(Slide2::all())+1; }
function broadcast_video1s_get_count() { return count(Video1::all())+1; }
function broadcast_video2s_get_count() { return count(Video2::all())+1; }
function broadcast_video3s_get_count() { return count(Video3::all())+1; }
function broadcast_video4s_get_count() { return count(Video4::all())+1; }
function broadcast_contents_get_count() { return count(Content::all())+1; }
