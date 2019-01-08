import { Component, OnInit } from '@angular/core';
import { Http } from '@angular/http';

@Component({
  selector: 'app-muro',
  templateUrl: './muro.component.html',
  styleUrls: ['./muro.component.css']
})
export class MuroComponent implements OnInit {

  content: any;
  constructor(private http: Http) {
    this.http.get('http://localhost:8000/').toPromise().then((response) => {
      this.content = response.json();
    }).catch((error) => {
      console.log(error);
    });
  }

  ngOnInit() {
  }

}
