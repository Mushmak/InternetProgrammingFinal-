import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExampleWorkComponent } from './example-work.component';

describe('ExampleWorkComponent', () => {
  let component: ExampleWorkComponent;
  let fixture: ComponentFixture<ExampleWorkComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExampleWorkComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExampleWorkComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
