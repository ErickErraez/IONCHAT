import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

amigos: any = [];
prueba: any = {};

  constructor() {
    for(let index = 0; index < 18; index++){
      this.prueba.nombre = 'juan' + index;
      this.amigos.push(this.prueba);
    }
   }

  ngOnInit() {
  }

}
