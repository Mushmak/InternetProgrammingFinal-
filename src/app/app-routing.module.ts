import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


import {AboutComponent} from './about/about.component';
import { HomeComponent } from './home/home.component';
import { ExampleWorkComponent } from './example-work/example-work.component';
import { RequestsComponent } from './requests/requests.component';


const routes: Routes = [
  {path: 'about', component: AboutComponent},
  {path: 'home' , component: HomeComponent },
  {path: 'examplework', component:ExampleWorkComponent},
  {path: 'request', component:RequestsComponent},
  {path: '*', redirectTo: 'home'},
  {path: '**', redirectTo: 'home'}
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
export const routingComponents = [AboutComponent,HomeComponent,ExampleWorkComponent,RequestsComponent];