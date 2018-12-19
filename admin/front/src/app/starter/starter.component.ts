import { Component, AfterViewInit } from '@angular/core';
import { CategoryserviceService } from './categoryservice.service';

@Component({
  selector: 'app-starter',
  templateUrl: './starter.component.html',
  styleUrls: ['./starter.component.scss']
})
export class StarterComponent implements AfterViewInit {
  public categories = [];

  constructor(private _categoryService:CategoryserviceService){}
  ngAfterViewInit() {
    this._categoryService.getCategories()
        .subscribe((data:any[]) => {
          //this.categories = data
          console.log(this.categories);
          
        }, (error) => {
          console.log(error);
          alert("Cateogries Get Data error");
        });
  }
}
