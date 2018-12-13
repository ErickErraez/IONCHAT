import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { ProfileComponent } from './profile/profile.component';
import { ChatComponent } from './chat/chat.component';
import { HomeComponent } from './home/home.component';
import { FriendsComponent } from './friends/friends.component';
import { MuroComponent } from './muro/muro.component';
import { RouterModule, Routes } from '@angular/router';
import { NotFoundComponent } from './not-found/not-found.component';
import { AmistadComponent } from './friends/amistad/amistad.component';
import { SolicitudesComponent } from './friends/solicitudes/solicitudes.component';

const appRoutes: Routes = [
  { path: '', component: LoginComponent },
  { path: 'home', component: HomeComponent },
  { path: 'login', component: LoginComponent },
  { path: 'profile', component: ProfileComponent },
  { path: 'friends', component: FriendsComponent },
  { path: 'not-found', component: NotFoundComponent },
  { path: '**', redirectTo: 'not-found' }

];

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    ProfileComponent,
    ChatComponent,
    HomeComponent,
    FriendsComponent,
    MuroComponent,
    AmistadComponent,
    SolicitudesComponent,
    NotFoundComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(appRoutes),
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
