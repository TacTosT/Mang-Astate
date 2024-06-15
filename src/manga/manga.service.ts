import { Injectable } from '@nestjs/common';
import { CreateMangaDto } from './dto/create-manga.dto';
import { UpdateMangaDto } from './dto/update-manga.dto';
import { Manga } from './entities/manga.entity';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';

@Injectable()
export class MangaService {
  constructor(
    @InjectRepository(Manga)
    private mangaRepository: Repository<Manga>,
  ){}

  create(createMangaDto: CreateMangaDto) {
    return 'This action adds a new manga';
  }

  findAll() {
    return `This action returns all manga`;
  }

  findOne(id: number) {
    return `This action returns a #${id} manga`;
  }

  update(id: number, updateMangaDto: UpdateMangaDto) {
    return `This action updates a #${id} manga`;
  }

  remove(id: number) {
    return `This action removes a #${id} manga`;
  }
}
