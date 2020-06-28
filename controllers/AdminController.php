<?php

    class AdminController extends Controller
    {


        public function index()
        {
            require_once(ROOT.'views/layaout/default.php');
        }
        public function Students()
        {
            $this->folder = "student";
            $this->view = "listStudent";
            require_once(ROOT.'dao/StudentDao.php');
            $data = new StudentDao();
            $students = $data->findAll();
            
            $this->render(['students'=>$students]);
        }
        public function StudentRegistor()
        {
            $this->folder = "student";
            $this->view = "RegistorStudent";
            $this->render();
        }
        public function StudentInsert()
        {
            
        }
        public function Rooms()
        {
            $this->folder = "room";
            $this->view = "ListRoom";
            require_once(ROOT.'dao/RoomDao.php');
            $room = new RoomDao();
            $rooms = $room->findAll();
            $this->render(['rooms'=>$rooms]);
            
        }

        public function RoomRegistor()
        {
            $this->folder = "room";
            $this->view = "RegistorRoom";
            $this->render();
        }
        public function RoomDelete()
        {
        }
        public function RoomEdit()
        {
        }
    }