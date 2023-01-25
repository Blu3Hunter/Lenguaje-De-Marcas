import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FotosPageComponent } from './fotos-page.component';

describe('FotosPageComponent', () => {
  let component: FotosPageComponent;
  let fixture: ComponentFixture<FotosPageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FotosPageComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FotosPageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
