import { Usuario } from './usuario';

describe('Usuario', () => {
  it('should create an instance', () => {
    expect(new Usuario("Teste", "teste@email.com")).toBeTruthy();
  });
});
