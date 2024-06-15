import { Module } from '@nestjs/common';
import { MangaService } from './manga.service';
import { MangaController } from './manga.controller';
import { Manga } from './entities/manga.entity';
import { TypeOrmModule } from '@nestjs/typeorm';

@Module({
  imports: [TypeOrmModule.forFeature([Manga])],
  controllers: [MangaController],
  providers: [MangaService],
})
export class MangaModule {}
