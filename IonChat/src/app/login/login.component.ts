import { Component, OnInit } from '@angular/core';
import { HAMMER_LOADER } from '@angular/platform-browser';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
<<<<<<< HEAD
  estado: any = 'login';
=======
  status: any = 'login';
>>>>>>> 3ed9a3730426377ee6550657f6f7740a16ccc6bb
  constructor() { }

  ngOnInit() {
  }
  
}
