import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FotosDetailPageComponent } from './fotos-detail-page.component';

describe('FotosDetailPageComponent', () => {
  let component: FotosDetailPageComponent;
  let fixture: ComponentFixture<FotosDetailPageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FotosDetailPageComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FotosDetailPageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
