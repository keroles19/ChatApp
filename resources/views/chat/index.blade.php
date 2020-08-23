@extends('layouts.app')

@push('css')
    <link href="{{asset('css/chat.css')}}" rel="stylesheet">
@endpush

@section('content')
    <!--Coded With Love By Mutiullah Samim-->
    <body>
    <div class="container-fluid mt-5 h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search">
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body contacts_body">
                        <ui class="contacts">
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                             class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Khalid</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                        </ui>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-8 col-xl-6 chat" id="app">
                <div class="card">
                    <user-component></user-component>
                    <div  class="card-body msg_card_body " v-chat-scroll="{smooth: true, scrollonremoved:true}">
                        <span v-if="chat.message.length==0" class="text-white text-center">
                            <h5>Now You can Start Chat</h5>
                        </span>
                        <message-component v-for="(v,n) in chat.message"
                                           :key="v.index"
                                           :type="chat.type[n]"

                        > @{{ v }}
                        </message-component>

                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text attach_btn"><i class="fa fa-paperclip"></i></span>
                            </div>
                            <textarea name="" class="form-control type_msg"
                                      placeholder="Type your message..." v-model="message"
                            @keyup.exact.enter="send"
                            ></textarea>
                            <div class="input-group-append">
                                <span class="input-group-text send_btn">
                                    <i class="fa fa-location-arrow"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')
    <script src="{{asset('js/scrollbar.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @endpush
