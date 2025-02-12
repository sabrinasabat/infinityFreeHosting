import { TutorialService } from './tutorial.service';
import {TutorialListComponent} from './tutorial-list/tutorial-list.component';

import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import {HttpClientModule} from '@angular/common/http';
import { provideAnimationsAsync } from '@angular/platform-browser/animations/async';
import {MatSlideToggleModule} from '@angular/material/slide-toggle';
import {MatSlider} from '@angular/material/slider';
import {MatAnchor, MatButton} from '@angular/material/button';

@NgModule({
  declarations: [
    AppComponent,
    TutorialListComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    MatSlideToggleModule,
    HttpClientModule,
    MatSlider,
    MatButton,
    MatAnchor

  ],
  providers: [TutorialService],
  bootstrap: [AppComponent]
})
export class AppModule { }
