<template>
    <div class="card-header msg_head">
        <div class="d-flex bd-highlight" :userId="userId">
            <div class="img_cont">
                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                     class="rounded-circle user_img">
                <span class="online_icon"></span>
            </div>
            <div class="user_info">
                <span>Chat with Khalid</span>
                <p>{{type}}</p>
            </div>
            <div class="video_cam">
                <span><i class="fa fa-video-camera"></i></span>
                <span><i class="fa fa-phone"></i></span>
            </div>
        </div>
        <span id="action_menu_btn"><i class="fa fa-ellipsis-v"></i></span>
        <div class="action_menu">
            <ul>
                <li><i class="fa fa-user-circle"></i> View profile</li>
                <li><i class="fa fa-users"></i> Add to close friends</li>
                <li><i class="fa fa-plus"></i> Add to group</li>
                <li><i class="fa fa-ban"></i> Block</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name :"UserComponent",
        props:[
            'type','userid'
        ],
        data(){
            return {
                'userId' :'1'
            }
        }
    }
</script>
