import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class CategoryserviceService {
  //http://localhost:8000/api/categories
  private _url:string = "http://127.0.0.1:8000/api";
  constructor(private httpService: HttpClient) { }

  getCategories():Observable<any[]>{
    return this.httpService.get<any[]>(this._url + '/categories');
  }
}
