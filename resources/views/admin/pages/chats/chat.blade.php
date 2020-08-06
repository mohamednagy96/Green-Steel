@extends('admin.layouts.master')

@section('content')

    <div class="container">
        <div class="col-sm-11  frame" style="   margin-top: 21px;        ">
            <ul>

            @if(count($chats) === 0)
                        <li style="width:100%">

            <div class="msj macro">
                <div class="text text-l">
                <h2>There is no chat yet.</h2>
                </div>d
            </div>
            </li>
            @endif

            @foreach($chats as $chat)
              @if($chat->sender_id === Auth::user()->id)
                <li style="width:100%">

                    <div class="msj macro">
                        <div class="avatar"><img class="img-circle"  src="https://lh6.googleusercontent.com/-lr2nyjhhjXw/AAAAAAAAAAI/AAAAAAAARmE/MdtfUmC0M4s/photo.jpg?sz=48"></div>
                        <div class="text text-l">
                        <h3>{{$chat->sender_name}}</h3>
                            <p>{{$chat->message}}</p>
                            <p><small>{{ $chat->created_at->diffForHumans() }}</small></p>
                        </div>
                    </div>
                </li>
                @else
                <li style="width:100%;">
                    <div class="msj-rta macro">
                        <div class="text text-r">
                        <h3>{{$chat->sender_name}}</h3>
                            <p>{{$chat->message}}</p>
                            <p><small>{{ $chat->created_at->diffForHumans() }}</small></p>
                        </div>
                        <div class="avatar" style="padding:0px 0px 0px 10px !important"><img class="img-circle"  src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg"></div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
            <div class="message-input-container">
                <form action="">


                </form>

            <form action="send_chat" method="POST">
                @csrf
                <div class="msj-rta macro">
                    <div class="text text-r" style="background:whitesmoke !important">
                        <input class="mytext" name="message" placeholder="Type a message">
                    </div>

                </div>
                <div   style="padding: 14px 23px 0 8px; float:right;">
                    <button  class="btn btn-primary">Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
