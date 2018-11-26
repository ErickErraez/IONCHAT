import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { ProfileComponent } from './profile/profile.component';
import { ChatComponent } from './chat/chat.component';
import { HomeComponent } from './home/home.component';
import { ContactComponent } from './contact/contact.component';
import { FriendsComponent } from './friends/friends.component';
import { NavbarComponent } from './login/navbar/navbar.component';
import { BodyComponent } from './login/body/body.component';
import { FooterComponent } from './login/footer/footer.component';
import { MuroComponent } from './muro/muro.component';
import { RouterModule, Routes } from '@angular/router';

const appRoutes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'home', component: HomeComponent },
  { path: 'profile', component: ProfileComponent },
  { path: 'friends', component: FriendsComponent }

];

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    ProfileComponent,
    ChatComponent,
    HomeComponent,
    ContactComponent,
    FriendsComponent,
    NavbarComponent,
    BodyComponent,
    FooterComponent,
    MuroComponent
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
