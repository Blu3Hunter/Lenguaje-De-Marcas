import { TestBed } from '@angular/core/testing';

import { BotonesService } from './botones.service';

describe('BotonesService', () => {
  let service: BotonesService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(BotonesService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
