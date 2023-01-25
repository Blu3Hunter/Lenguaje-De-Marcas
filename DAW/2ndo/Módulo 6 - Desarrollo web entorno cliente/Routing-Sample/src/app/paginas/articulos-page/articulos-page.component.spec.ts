import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ArticulosPageComponent } from './articulos-page.component';

describe('ArticulosPageComponent', () => {
  let component: ArticulosPageComponent;
  let fixture: ComponentFixture<ArticulosPageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ArticulosPageComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ArticulosPageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
