import { Component, OnInit } from '@angular/core';
import { HAMMER_LOADER } from '@angular/platform-browser';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  estado: any = 'login';
  constructor() { }

  ngOnInit() {
  }
  
}
