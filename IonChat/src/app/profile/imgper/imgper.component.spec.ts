import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ImgperComponent } from './imgper.component';

describe('ImgperComponent', () => {
  let component: ImgperComponent;
  let fixture: ComponentFixture<ImgperComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ImgperComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ImgperComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
