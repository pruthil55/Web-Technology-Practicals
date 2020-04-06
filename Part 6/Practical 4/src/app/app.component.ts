import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  months = [
    new Person('a', 25),
    new Person('a', 25),
    new Person('a', 25),
    new Person('a', 25),
  ];
  title = 'app.component.ts Test';
}

class Person{
  _name: string;
  _age: number;
  constructor(name: string, age: number){
    this._name = name;
    this._age = age;
  }

}
